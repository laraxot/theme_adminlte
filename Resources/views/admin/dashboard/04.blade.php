@extends('adm_theme::layouts.app')
@section('content')
    @php
<<<<<<< HEAD

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
            <x-lime.chart type="chartjs" id="{{ $question_chart->id }}"></x-lime.chart>
        @endforeach
    @endif
=======
    //dddx($profile->getProfile()->customers);
    $customer = $profile->getProfile()->customers->first();
    $survey_pdf_first = $customer->surveyPdfs->first();
    @endphp

    @foreach ($survey_pdf_first->questionCharts as $question_chart)
        <p>{{ $question_chart->question_txt }}</p>
        <x-lime.chart type="chartjs" question_chart_id="{{ $question_chart->id }}"></x-lime.chart>
    @endforeach
>>>>>>> 9f56546 (.)
@endsection
