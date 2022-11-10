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
<<<<<<< HEAD
=======
            <x-lime.chart type="chartjs" id="{{ $question_chart->id }}"></x-lime.chart>
        @endforeach
    @endif
<<<<<<< HEAD
=======
    //dddx($profile->getProfile()->customers);
    $customer = $profile->getProfile()->customers->first();
    $survey_pdf_first = null;
    $question_charts = null;
    if (!is_null($customer)) {
        $survey_pdf_first = $customer->surveyPdfs->last();
        $question_charts = $survey_pdf_first->questionCharts;
    }
    @endphp

<<<<<<< HEAD

    @foreach ($survey_pdf_first->questionCharts as $question_chart)
        <p>{{ $question_chart->question_txt }}</p>
        <x-lime.chart type="chartjs" id="{{ $question_chart->id }}"></x-lime.chart>
    @endforeach
>>>>>>> 9f56546 (.)
=======
    @if (!is_null($question_charts))
        @foreach ($survey_pdf_first->questionCharts as $question_chart)
            <p>{{ $question_chart->question_txt }}</p>
>>>>>>> b6bf7b3 (rebase)
            <x-lime.chart type="chartjs" id="{{ $question_chart->id }}"></x-lime.chart>
        @endforeach
    @endif
=======
>>>>>>> 3703261 (up)
@endsection
