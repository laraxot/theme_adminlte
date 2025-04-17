@extends('adm_theme::layouts.app')
@section('content')

    @php
   
    $customer = $profile->getProfile()->customers;

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
            <x-lime.chart-img.v2 questionChartId="{{ $question_chart->id }}">
            </x-lime.chart-img.v2>
        @endforeach
    @endif
@endsection
