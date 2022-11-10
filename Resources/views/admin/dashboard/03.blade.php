<<<<<<< HEAD
<<<<<<< HEAD

=======
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
=======
>>>>>>> 63c2c43 (up)
@extends('adm_theme::layouts.app')
@section('content')
    @php

    //dddx($profile->getProfile()->customers);
    $customer = $profile->getProfile()->customers->first();
    $survey_pdf_first = null;
    $question_charts = null;
    if (!is_null($customer)) {
        $survey_pdf_first = $customer->surveyPdfs->last();
        $question_charts = $survey_pdf_first->questionCharts;
    }
    @endphp

    @if (!is_null($question_charts))
        @foreach ($survey_pdf_first->questionCharts as $question_chart)
            <p>{{ $question_chart->question_txt }}</p>
            <x-lime.chart type="chartjs" questionChartId="{{ $question_chart->id }}"></x-lime.chart>
        @endforeach
    @endif
@endsection
<<<<<<< HEAD
>>>>>>> e4c311e... .
>>>>>>> b738e1c (rebase)
=======
>>>>>>> 63c2c43 (up)
