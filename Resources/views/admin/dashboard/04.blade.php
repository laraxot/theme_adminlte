@extends('adm_theme::layouts.app')
@section('content')
    @php
    //dddx($profile->getProfile()->customers);
    $customer = $profile->getProfile()->customers->first();
    $survey_pdf_first = null;
    if (!is_null($customer)) {
        $survey_pdf_first = $customer->surveyPdfs->first();
    }
    @endphp


    @foreach ($survey_pdf_first->questionCharts as $question_chart)
        <p>{{ $question_chart->question_txt }}</p>
        <x-lime.chart type="chartjs" id="{{ $question_chart->id }}"></x-lime.chart>
    @endforeach
@endsection
