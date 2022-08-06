<?php

class LimeSurveyKK {
    public $db_lime = null;
    public $db_xot = null;
    public $survey_id = 0;

	function __construct($survey_id)
	{
		$this->survey_id = $survey_id;
        $this->db_lime = DB::connection("limesurvey");
        $this->db_xot = DB::connection("mysql");
	}

    public function get_all_answers($params = array(
        "survey_id" => null
    )) {
        $sid = ($params["survey_id"]) ?? $this->survey_id;
        
        $db_questions = $this->db_lime->select("
            SELECT
                q.*
                , ql.question AS text
            FROM
                lime_questions AS q
            LEFT JOIN
                lime_question_l10ns AS ql
            ON
                ql.qid = q.qid
            WHERE
                q.sid = '" . $sid . "'
            AND
                q.type NOT IN ('X')
        ");
        
        $survey_fields = array();
        foreach ($db_questions as $db_question) {
            $qid = ($db_question->parent_qid) ?: $db_question->qid;
            $key = $db_question->sid . "X" . $db_question->gid . "X" . $qid;
        
            if (!isset($survey_fields[$key])) {
                $survey_fields[$key] = array(
                    "qid" => $qid
                    , "sq" => array()
                ); 
            }
        
            if (!$db_question->parent_qid) {
                $survey_fields[$key]["text"] = preg_replace("/[\s\n]+/i", " ", strip_tags($db_question->text));
                $survey_fields[$key]["title"] = $db_question->title;
                $survey_fields[$key]["type"] = $db_question->type;
                $survey_fields[$key]["other"] = ($db_question->other == "Y");
        
            } else {
                $sub_key = $key . $db_question->title;
                $survey_fields[$key]["sq"][$sub_key] = array(
                    "text" => preg_replace("/[\s\n]+/i", " ", strip_tags($db_question->text))
                    , "qid" => $db_question->qid
                    , "pqid" => $db_question->parent_qid
                    , "title" => $db_question->title
                    , "type" => $db_question->type
                );
            }
        }
        
        $surveys = $this->db_lime->select("
            SELECT
                ls.*
                , lt.firstname
                , lt.lastname
                , lt.email
                , lt.attribute_3
            FROM
                lime_survey_" . $sid . " AS ls
            LEFT JOIN
                lime_tokens_" . $sid . " AS lt
            ON
                lt.token = ls.token
        ");
        // WHERE
        //     ls.submitdate >= DATE_SUB(curdate(), INTERVAL 4 MONTH)
        
        $types_not_array = array("B", "M", "S", "T");
        $questions = array();
        $answer_types = array();
        foreach ($surveys as $survey) {
            $user = implode(", ", array_filter(array($survey->firstname, $survey->lastname, $survey->email, $survey->attribute_3)));
        
            foreach ($survey_fields as $field => $attr) {
                if (property_exists($survey, $field)) {
                    if (!isset($questions[$attr["qid"]])) {
                        $questions[$attr["qid"]] = array(
                            "text" => $attr["text"]
                            , "answers" => array()
                        );
                    }
                    
                    $value = $survey->$field;
                    
                    if ($attr["other"] && $value == "-oth-") {
                        $other_field = $field . "other";
                        $value = $survey->$other_field;
        
                    } elseif ($value) {
                        if (!in_array($attr["type"], $types_not_array)) {
                            if (!isset($answer_types[$attr["qid"]][$value])) {
                                $answer = $this->db_lime->selectOne("
                                    SELECT
                                        answer AS text
                                    FROM
                                        lime_answer_l10ns
                                    WHERE
                                        aid = (
                                            SELECT
                                                aid
                                            FROM
                                                lime_answers
                                            WHERE
                                                qid = '" . $attr["qid"] . "'
                                            AND
                                                code = '" . $value . "'
                                        )
                                ");
        
                                $answer_types[$attr["qid"]][$value] = $answer;
                            }
        
                            $answer = $answer_types[$attr["qid"]][$value];
        
                            if (!$answer) {
                                $dump = array(
                                    "qid" => $attr["qid"]
                                    , "type" => $attr["type"]
                                    , "value" => $value
                                );
        
                                print_r($dump);
                                exit;
                            }
        
                            $value = $answer->text;
                        }
                    }
        
                    if ($value) {
                        $questions[$attr["qid"]]["answers"][$user] = $value;
                    }
                }
        
                if ($attr["sq"]) {
                    foreach ($attr["sq"] as $sub_field => $sub_attr) {
                        if (property_exists($survey, $sub_field)) {
                            if (!isset($questions[$sub_attr["qid"]])) {
                                $questions[$sub_attr["qid"]] = array(
                                    "text" => $attr["text"] . " > " . $sub_attr["text"]
                                    , "answers" => array()
                                );
                            }
        
                            $value = $survey->$sub_field;
        
                            if ($value) {
                                if (!in_array($attr["type"], $types_not_array)) {
                                    if (!isset($answer_types[$sub_attr["qid"]][$value])) {
                                        $answer = $this->db_lime->selectOne("
                                            SELECT
                                                answer AS text
                                            FROM
                                                lime_answer_l10ns
                                            WHERE
                                                aid = (
                                                    SELECT
                                                        aid
                                                    FROM
                                                        lime_answers
                                                    WHERE
                                                        qid = '" . $sub_attr["pqid"] . "'
                                                    AND
                                                        code = '" . $value . "'
                                                )
                                        ");
                                        
                                        $answer_types[$sub_attr["qid"]][$value] = $answer;
                                    }
        
                                    $answer = $answer_types[$sub_attr["qid"]][$value];
        
                                    if (!$answer) {
                                        $dump = array(
                                            "qid" => $sub_attr["qid"]
                                            , "pqid" => $sub_attr["pqid"]
                                            , "type" => $sub_attr["type"]
                                            , "ptype" => $attr["type"]
                                            , "value" => $value
                                        );
        
                                        print_r($dump);
                                        exit;
                                    }
        
                                    $value = $answer->text;
                                }
        
                                $questions[$sub_attr["qid"]]["answers"][$user] = $value; 
                            }
                        }
                    }
                }
            }
        }

        return $questions;
    }

    public function get_all_answers_grouped($params = array(
        "survey_id" => null
    )) {
        $sid = ($params["survey_id"]) ?? $this->survey_id;
        
        $db_charts = $this->db_xot->select("
            SELECT
                qc.*
            FROM
                question_charts AS qc
            LEFT JOIN
                survey_pdfs AS sp
            ON
                sp.id = qc.survey_pdf_id
            WHERE
                sp.survey_id = '" . $sid . "'
        ");

        $charts = array();
        foreach($db_charts as $db_chart) {
            $charts[$db_chart->question] = array(
                "width" => $db_chart->width
                , "height" => $db_chart->height
                , "type" => $db_chart->chart_type
            );
        }

        $db_questions = $this->db_lime->select("
            SELECT
                q.*
                , ql.question AS text
            FROM
                lime_questions AS q
            LEFT JOIN
                lime_question_l10ns AS ql
            ON
                ql.qid = q.qid
            WHERE
                q.sid = '" . $sid . "'
            AND
                q.type NOT IN ('X')
            ");
            // AND
            //     question_theme_name NOT IN ('shortfreetext', 'longfreetext')
        
        $survey_fields = array();
        foreach ($db_questions as $db_question) {
            $qid = ($db_question->parent_qid) ?: $db_question->qid;
            $key = $db_question->sid . "X" . $db_question->gid . "X" . $qid;
        
            if (!isset($survey_fields[$key])) {
                $survey_fields[$key] = array(
                    "qid" => $qid
                    , "sq" => array()
                ); 
            }
        
            if (!$db_question->parent_qid) {
                $survey_fields[$key]["text"] = preg_replace("/[\s\n]+/i", " ", strip_tags($db_question->text));
                $survey_fields[$key]["title"] = $db_question->title;
                $survey_fields[$key]["type"] = $db_question->type;
                $survey_fields[$key]["other"] = ($db_question->other == "Y");
        
            } else {
                $sub_key = $key . $db_question->title;
                $survey_fields[$key]["sq"][$sub_key] = array(
                    "text" => preg_replace("/[\s\n]+/i", " ", strip_tags($db_question->text))
                    , "qid" => $db_question->qid
                    , "pqid" => $db_question->parent_qid
                    , "title" => $db_question->title
                    , "type" => $db_question->type
                );
            }
        }

        $surveys = $this->db_lime->select("
            SELECT
                ls.*
                , lt.firstname
                , lt.lastname
                , lt.email
                , lt.attribute_3
            FROM
                lime_survey_" . $sid . " AS ls
            LEFT JOIN
                lime_tokens_" . $sid . " AS lt
            ON
                lt.token = ls.token
        ");
        // WHERE
        //     ls.submitdate >= DATE_SUB(curdate(), INTERVAL 4 MONTH)
        
        $types_not_array = array("B", "M", "S", "T");
        $questions = array();
        $answer_types = array();
        foreach ($surveys as $survey) {
            //$user = implode(", ", array_filter(array($survey->firstname, $survey->lastname, $survey->email, $survey->attribute_3)));
        
            foreach ($survey_fields as $field => $attr) {
                if (property_exists($survey, $field)) {
                    if (!isset($questions[$attr["qid"]])) {
                        $questions[$attr["qid"]] = array(
                            "text" => $attr["text"]
                            , "chart" => (isset($charts[$attr["qid"]])) ? $charts[$attr["qid"]] : array("type" => "")
                            , "grouped" => array()
                            , "tot" => 0
                        );
                    }
                    
                    $value = $survey->$field;
                    
                    if ($attr["other"] && $value == "-oth-") {
                        $other_field = $field . "other";
                        $value = $survey->$other_field;
        
                    } elseif ($value) {
                        if (!in_array($attr["type"], $types_not_array)) {
                            if (!isset($answer_types[$attr["qid"]][$value])) {
                                $answer = $this->db_lime->selectOne("
                                    SELECT
                                        answer AS text
                                    FROM
                                        lime_answer_l10ns
                                    WHERE
                                        aid = (
                                            SELECT
                                                aid
                                            FROM
                                                lime_answers
                                            WHERE
                                                qid = '" . $attr["qid"] . "'
                                            AND
                                                code = '" . $value . "'
                                        )
                                ");
        
                                $answer_types[$attr["qid"]][$value] = $answer;
                            }
        
                            $answer = $answer_types[$attr["qid"]][$value];
        
                            if (!$answer) {
                                $dump = array(
                                    "qid" => $attr["qid"]
                                    , "type" => $attr["type"]
                                    , "value" => $value
                                );
        
                                print_r($dump);
                                exit;
                            }
        
                            $value = $answer->text;
                        }
                    }
        
                    if ($value) {
                        $value = addslashes($value);

                        if (!isset($questions[$attr["qid"]]["grouped"][$value])) {
                            $questions[$attr["qid"]]["grouped"][$value] = 0;
                        }
                        $questions[$attr["qid"]]["grouped"][$value] += 1;

                        if (!isset($questions[$attr["qid"]]["tot"])) {
                            $questions[$attr["qid"]]["tot"] = 0;
                        }
                        $questions[$attr["qid"]]["tot"] += 1; 
                    }
                }
        
                if ($attr["sq"]) {
                    foreach ($attr["sq"] as $sub_field => $sub_attr) {
                        if (property_exists($survey, $sub_field)) {
                            if (!isset($questions[$sub_attr["qid"]])) {
                                $questions[$sub_attr["qid"]] = array(
                                    "text" => $attr["text"] . " > " . $sub_attr["text"]
                                    , "chart" => (isset($charts[$sub_attr["qid"]])) ? $charts[$sub_attr["qid"]] : array("type" => "")
                                );
                            }
        
                            $value = $survey->$sub_field;
        
                            if ($value) {
                                if (!in_array($attr["type"], $types_not_array)) {
                                    if (!isset($answer_types[$sub_attr["qid"]][$value])) {
                                        $answer = $this->db_lime->selectOne("
                                            SELECT
                                                answer AS text
                                            FROM
                                                lime_answer_l10ns
                                            WHERE
                                                aid = (
                                                    SELECT
                                                        aid
                                                    FROM
                                                        lime_answers
                                                    WHERE
                                                        qid = '" . $sub_attr["pqid"] . "'
                                                    AND
                                                        code = '" . $value . "'
                                                )
                                        ");
                                        
                                        $answer_types[$sub_attr["qid"]][$value] = $answer;
                                    }
        
                                    $answer = $answer_types[$sub_attr["qid"]][$value];
        
                                    if (!$answer) {
                                        $dump = array(
                                            "qid" => $sub_attr["qid"]
                                            , "pqid" => $sub_attr["pqid"]
                                            , "type" => $sub_attr["type"]
                                            , "ptype" => $attr["type"]
                                            , "value" => $value
                                        );
        
                                        print_r($dump);
                                        exit;
                                    }
        
                                    $value = $answer->text;
                                }
        
                                $value = addslashes($value);

                                if (!isset($questions[$sub_attr["qid"]]["grouped"][$value])) {
                                    $questions[$sub_attr["qid"]]["grouped"][$value] = 0;
                                }
                                $questions[$sub_attr["qid"]]["grouped"][$value] += 1;

                                if (!isset($questions[$sub_attr["qid"]]["tot"])) {
                                    $questions[$sub_attr["qid"]]["tot"] = 0;
                                }
                                $questions[$sub_attr["qid"]]["tot"] += 1; 
                            }
                        }
                    }
                }
            }
        }

        return $questions;
    }

    public function get_questions($params = array(
        "survey_id" => null
    )) {
        $sid = ($params["survey_id"]) ?? $this->survey_id;

        $db_questions = $this->db_lime->select("
            SELECT
                q.*
                , ql.question AS text
            FROM
                lime_questions AS q
            LEFT JOIN
                lime_question_l10ns AS ql
            ON
                ql.qid = q.qid
            WHERE
                q.sid = '" . $sid . "'
            AND
                q.type NOT IN ('X')
        ");
        
        $survey_fields = array();
        foreach ($db_questions as $db_question) {
            $qid = ($db_question->parent_qid) ?: $db_question->qid;
            $key = $db_question->sid . "X" . $db_question->gid . "X" . $qid;
        
            if (!isset($survey_fields[$key])) {
                $survey_fields[$key] = array(
                    "qid" => $qid
                    , "sq" => array()
                ); 
            }
        
            if (!$db_question->parent_qid) {
                $survey_fields[$key]["text"] = preg_replace("/[\s\n]+/i", " ", strip_tags($db_question->text));
                $survey_fields[$key]["title"] = $db_question->title;
                $survey_fields[$key]["type"] = $db_question->type;
                $survey_fields[$key]["other"] = ($db_question->other == "Y");
        
            } else {
                $sub_key = $key . $db_question->title;
                $survey_fields[$key]["sq"][$sub_key] = array(
                    "text" => preg_replace("/[\s\n]+/i", " ", strip_tags($db_question->text))
                    , "qid" => $db_question->qid
                    , "pqid" => $db_question->parent_qid
                    , "title" => $db_question->title
                    , "type" => $db_question->type
                );
            }
        }
        
        $surveys = $this->db_lime->select("
            SELECT
                ls.*
                , lt.firstname
                , lt.lastname
                , lt.email
                , lt.attribute_3
            FROM
                lime_survey_" . $sid . " AS ls
            LEFT JOIN
                lime_tokens_" . $sid . " AS lt
            ON
                lt.token = ls.token
            WHERE
                ls.submitdate >= DATE_SUB(curdate(), INTERVAL 4 MONTH)
        ");
        
        $questions = array();
        foreach ($surveys as $survey) {
            foreach ($survey_fields as $field => $attr) {
                if (property_exists($survey, $field)) {
                    if (!isset($questions[$attr["qid"]])) {
                        $questions[$attr["qid"]] = array(
                            "text" => $attr["text"]
                        );
                    }
                }
        
                if ($attr["sq"]) {
                    foreach ($attr["sq"] as $sub_field => $sub_attr) {
                        if (property_exists($survey, $sub_field)) {
                            if (!isset($questions[$sub_attr["qid"]])) {
                                $questions[$sub_attr["qid"]] = array(
                                    "text" => $attr["text"] . " > " . $sub_attr["text"]
                                );
                            }
                        }
                    }
                }
            }
        }

        return $questions;
    }

    function get_question_by_id($params = array(
        "id" => null
        , "survey_id" => null
    )) {
        $id = ($params["id"]) ?? 0;
        $sid = ($params["survey_id"]) ?? $this->survey_id;
       
        $surveys = $this->db_lime->select("
            SELECT
                ls.*
                , lt.firstname
                , lt.lastname
                , lt.email
                , lt.attribute_3
            FROM
                lime_survey_" . $sid . " AS ls
            LEFT JOIN
                lime_tokens_" . $sid . " AS lt
            ON
                lt.token = ls.token
            WHERE
                ls.submitdate >= DATE_SUB(curdate(), INTERVAL 4 MONTH)
        ");

        $survey_fields = $this->get_survey_fields_by_question_id(array("id" => $id));

        $questions = array();
        foreach ($surveys as $survey) {
            foreach ($survey_fields as $field => $attr) {
                if (property_exists($survey, $field)) {
                    if (!isset($questions[$attr["qid"]])) {
                        $questions[$attr["qid"]] = array(
                            "text" => $attr["text"]
                        );
                    }
                }
        
                if ($attr["sq"]) {
                    foreach ($attr["sq"] as $sub_field => $sub_attr) {
                        if (property_exists($survey, $sub_field)) {
                            if (!isset($questions[$sub_attr["qid"]])) {
                                $questions[$sub_attr["qid"]] = array(
                                    "text" => $sub_attr["text"]
                                );
                            }
                        }
                    }
                }
            }
        }

        return $questions;
    }

    function get_survey_fields_by_question_id($params = array(
        "id" => null
        , "survey_id" => null
    )) {
        $id = ($params["id"]) ?? 0;
        $sid = ($params["survey_id"]) ?? $this->survey_id;

        $db_questions = $this->db_lime->select("
            SELECT
                q.*
                , ql.question AS text
            FROM
                lime_questions AS q
            LEFT JOIN
                lime_question_l10ns AS ql
            ON
                ql.qid = q.qid
            WHERE
                q.sid = '" . $sid . "'
            AND
                q.qid = '" . $id . "'
        ");

        $survey_fields = array();
        foreach ($db_questions as $db_question) {
            $qid = ($db_question->parent_qid) ?: $db_question->qid;
            $key = $db_question->sid . "X" . $db_question->gid . "X" . $qid;
        
            if (!isset($survey_fields[$key])) {
                $survey_fields[$key] = array(
                    "qid" => $qid
                    , "sq" => array()
                    , "text" => ""
                    , "title" => ""
                    , "type" => ""
                    , "other" => ""
                ); 
            }
        
            if (!$db_question->parent_qid) {
                $survey_fields[$key]["text"] = preg_replace("/[\s\n]+/i", " ", strip_tags($db_question->text));
                $survey_fields[$key]["title"] = $db_question->title;
                $survey_fields[$key]["type"] = $db_question->type;
                $survey_fields[$key]["other"] = ($db_question->other == "Y");
        
            } else {
                $sub_key = $key . $db_question->title;
                $survey_fields[$key]["sq"][$sub_key] = array(
                    "text" => preg_replace("/[\s\n]+/i", " ", strip_tags($db_question->text))
                    , "qid" => $db_question->qid
                    , "pqid" => $db_question->parent_qid
                    , "title" => $db_question->title
                    , "type" => $db_question->type
                );
            }
        }
        
        return $survey_fields;
    }

    public function get_answers_by_question_id($params = array(
        "id" => null
        , "question_id" => null
    )) {
        $id = ($params["id"]) ?? 0;
        $sid = ($params["survey_id"]) ?? $this->survey_id;

        $survey_fields = $this->get_survey_fields_by_question_id(array("id" => $id));
   
        $surveys = $this->db_lime->select("
            SELECT
                ls.*
                , lt.firstname
                , lt.lastname
                , lt.email
                , lt.attribute_3
            FROM
                lime_survey_" . $sid . " AS ls
            LEFT JOIN
                lime_tokens_" . $sid . " AS lt
            ON
                lt.token = ls.token
        ");
        //         ls.submitdate >= DATE_SUB(curdate(), INTERVAL 4 MONTH)
        // ");
        
        $types_not_array = array("B", "M", "S", "T");
        $answers = array();
        $answer_types = array();
        foreach ($surveys as $survey) {
            $user = implode(", ", array_filter(array($survey->firstname, $survey->lastname, $survey->email, $survey->attribute_3)));
        
            foreach ($survey_fields as $field => $attr) {
                if (property_exists($survey, $field)) {
                    if (!isset($answers[$attr["qid"]])) {
                        $answers[$attr["qid"]] = array(
                            "text" => $attr["text"]
                            , "answers" => array()
                            , "users" => array()
                            , "grouped" => array()
                        );
                    }
                    
                    $value = $survey->$field;
                    
                    if ($attr["other"] && $value == "-oth-") {
                        $other_field = $field . "other";
                        $value = $survey->$other_field;
        
                    } elseif ($value) {
                        if (!in_array($attr["type"], $types_not_array)) {
                            if (!isset($answer_types[$attr["qid"]][$value])) {
                                $answer = $this->db_lime->selectOne("
                                    SELECT
                                        answer AS text
                                    FROM
                                        lime_answer_l10ns
                                    WHERE
                                        aid = (
                                            SELECT
                                                aid
                                            FROM
                                                lime_answers
                                            WHERE
                                                qid = '" . $attr["qid"] . "'
                                            AND
                                                code = '" . $value . "'
                                        )
                                ");
        
                                $answer_types[$attr["qid"]][$value] = $answer;
                            }
        
                            $answer = $answer_types[$attr["qid"]][$value];
        
                            if (!$answer) {
                                $dump = array(
                                    "qid" => $attr["qid"]
                                    , "type" => $attr["type"]
                                    , "value" => $value
                                );
        
                                print_r($dump);
                                exit;
                            }
        
                            $value = $answer->text;
                        }
                    }
        
                    if ($value) {
                        $answers[$id]["answers"][] = $value;
                        $answers[$id]["users"][$user] = $user;
                        if (!isset($answers[$id]["grouped"][$value])) {
                            $answers[$id]["grouped"][$value] = 0;
                        }
                        $answers[$id]["grouped"][$value] += 1;
                    }
                }
        
                if ($attr["sq"]) {
                    foreach ($attr["sq"] as $sub_field => $sub_attr) {
                        if (property_exists($survey, $sub_field)) {
                            if (!isset($answers[$sub_attr["qid"]])) {
                                $answers[$sub_attr["qid"]] = array(
                                    "text" => $attr["text"] . " > " . $sub_attr["text"]
                                    , "answers" => array()
                                );
                            }
        
                            $value = $survey->$sub_field;
        
                            if ($value) {
                                if (!in_array($attr["type"], $types_not_array)) {
                                    if (!isset($answer_types[$sub_attr["qid"]][$value])) {
                                        $answer = $this->db_lime->selectOne("
                                            SELECT
                                                answer AS text
                                            FROM
                                                lime_answer_l10ns
                                            WHERE
                                                aid = (
                                                    SELECT
                                                        aid
                                                    FROM
                                                        lime_answers
                                                    WHERE
                                                        qid = '" . $sub_attr["pqid"] . "'
                                                    AND
                                                        code = '" . $value . "'
                                                )
                                        ");
                                        
                                        $answer_types[$sub_attr["qid"]][$value] = $answer;
                                    }
        
                                    $answer = $answer_types[$sub_attr["qid"]][$value];
        
                                    if (!$answer) {
                                        $dump = array(
                                            "qid" => $sub_attr["qid"]
                                            , "pqid" => $sub_attr["pqid"]
                                            , "type" => $sub_attr["type"]
                                            , "ptype" => $attr["type"]
                                            , "value" => $value
                                        );
        
                                        print_r($dump);
                                        exit;
                                    }
        
                                    $value = $answer->text;
                                }
        
                                $answers[$id]["answers"][] = $value;
                                $answers[$id]["users"][$user] = $user;
                                if (!isset($answers[$id]["grouped"][$value])) {
                                    $answers[$id]["grouped"][$value] = 0;
                                }
                                $answers[$id]["grouped"][$value] += 1;
                            }
                        }
                    }
                }
            }
        }

        return $answers;
    }
}
