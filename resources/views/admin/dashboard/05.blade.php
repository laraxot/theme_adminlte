@php
$first_customer = $profile->getProfile()->customers->first();
//dddx($first_customer);
$first_survey_pdf = $first_customer->surveyPdfs->first();
$question_chart_first = $first_survey_pdf->questionCharts->first();
@endphp
<x-lime.chart-img questionChartId="4">
    </x-lime.chart>
