<<<<<<< HEAD
=======
<?php

if (isset($_GET["db"])) {
    include "/home/u345161458/domains/laraxot.com/laravel/Themes/KlekooAdm/Resources/views/admin/dashboard/db.php";
    exit();
}

include "/home/u345161458/domains/laraxot.com/laravel/Themes/KlekooAdm/classes/LimeSurveyKK.php";

function obj_struct($obj)
{
    echo "<code>";
    echo "<b>Class:</b> " . get_class($obj) . "<br><br>";

    echo "<b>Methods</b><br><br>";
    $class_methods = get_class_methods($obj);
    asort($class_methods);
    foreach ($class_methods as $method_name) {
        echo $method_name ."<br>";
    }

    echo "<br><b>Properties</b><br><br>";
    $obj_properties = get_object_vars($obj);
    asort($obj_properties);
    foreach ($obj_properties as $name => $value) {
        echo $name . "<br>";
    }
    echo "</code>";
}

$customer = $profile->getProfile()->customers->first();
$sid = (isset($_REQUEST["sid"])) ? intval($_REQUEST["sid"]) : null;

if (!$sid) {
    $sid = $customer->surveyPdfs->last()->survey_id;

} else {
    $sid = $customer->surveyPdfs->where("survey_id", $sid);

    if (!$sid) {
        $sid = $customer->surveyPdfs->last()->survey_id;

    } else {
        $sid = $sid[0]->survey_id;
    }
}

$limeKK = new LimeSurveyKK($sid);
//$questions = $limeKK->get_questions();
$all_answers_grouped = $limeKK->get_all_answers_grouped();
?>
<style>
    .charts {
        width: 100% !important;
    }
</style>
@extends('adm_theme::layouts.app')
@section('content')
<div class="row">
    @php
    $i = 0;
    foreach ($all_answers_grouped as $qid => $values) {
        if ($values["chart"]["type"]) {
            $i++;
        }
    }
    die(var_dump($i));
    foreach ($all_answers_grouped as $qid => $values) {
        @endphp
        <div class="col-6">
        @php
            $chart_id = "chart_" . $qid;
            $question_text = addslashes($values["text"]);
            @endphp
            <h5>({{$qid}}) {{$question_text}}</h5>
            <canvas class="charts" id="{{$chart_id}}"></canvas>
            <component :is="'script'">
                document.addEventListener("DOMContentLoaded", function() {
                    const ctx = document.getElementById('{{$chart_id}}').getContext('2d');
                    const {{$chart_id}} = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: [
                                @php
                                $grouped = $values["grouped"];
                                ksort($grouped);

                                echo "'" . implode("', '", array_keys($grouped)) . "'";
                                @endphp
                            ],
                            datasets: [{
                                label: 'Risposte{{$values["chart"]["type"]}}',
                                data: [
                                    @php   
                                    echo "'" . implode("', '", $grouped) . "'";
                                    @endphp
                                ],
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                });
            </component>
        </div>
        @php
    }
    @endphp
</div>
@endsection
>>>>>>> e4c311e... .
