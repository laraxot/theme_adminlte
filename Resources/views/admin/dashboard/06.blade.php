@extends('adm_theme::layouts.app')
@section('content')
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4ff622c (.)
=======
>>>>>>> 5b4054a (.)
>>>>>>> 4ab624f (rebase)

    @php
    //dddx($profile->getProfile()->customers);
    /*
                                            $customer_rnd=\Modules\Quaeris\Models\Customer::inRandomOrder()->first();
                                            $profile->getProfile()->customers()->sync($customer_rnd);
                                            */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4ff622c (.)
=======
>>>>>>> 5b4054a (.)
>>>>>>> 4ab624f (rebase)
    //dddx($customer_rnd);
    //dddx($profile->getProfile()->customers);
    $customer = $profile->getProfile()->customers;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======

>>>>>>> 49f02ef (.)
    @php
    //dddx($profile->getProfile()->customers);
    /*
                                $customer_rnd=\Modules\Quaeris\Models\Customer::inRandomOrder()->first();
                                $profile->getProfile()->customers()->sync($customer_rnd);
                                */
    //dddx($customer_rnd);
    $customer = $profile->getProfile()->customers->first();
<<<<<<< HEAD
    
>>>>>>> e45345e (.)
=======
=======
    //dddx($customer_rnd);
    //dddx($profile->getProfile()->customers);
    $customer = $profile->getProfile()->customers;
>>>>>>> dc72f5e (.)

>>>>>>> 8e96989 (.)
=======
>>>>>>> 4ff622c (.)
=======
>>>>>>> 5b4054a (.)
>>>>>>> 4ab624f (rebase)
    $survey_pdf_first = null;
    $question_charts = null;
    if (!is_null($customer)) {
        $survey_pdf_first = $customer->surveyPdfs->last();
        $question_charts = $survey_pdf_first->questionCharts;
    }
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> e45345e (.)
=======

>>>>>>> 8e96989 (.)
=======

>>>>>>> 4ff622c (.)
=======

>>>>>>> 5b4054a (.)
>>>>>>> 4ab624f (rebase)
    @endphp

    @if (!is_null($question_charts))
        @foreach ($survey_pdf_first->questionCharts as $question_chart)
            <p>{{ $question_chart->question_txt }}</p>
<<<<<<< HEAD
            <x-lime.chart-img.v2 questionChartId="{{ $question_chart->id }}">
            </x-lime.chart-img.v2>
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            <x-lime.chart-img.v2 questionChartId="{{ $question_chart->id }}">
            </x-lime.chart-img.v2>
=======
            <x-lime.chart-img.v2  questionChartId="{{ $question_chart->id }}"></x-lime.chart-img>
>>>>>>> e45345e (.)
=======
            <x-lime.chart-img.v2 questionChartId="{{ $question_chart->id }}">
<<<<<<< HEAD
                </x-lime.chart-img>
>>>>>>> 8e96989 (.)
=======
            </x-lime.chart-img.v2>
>>>>>>> 49f02ef (.)
=======
            <x-lime.chart-img.v2 questionChartId="{{ $question_chart->id }}">
            </x-lime.chart-img.v2>
>>>>>>> 4ff622c (.)
=======
            <x-lime.chart-img.v2 questionChartId="{{ $question_chart->id }}">
            </x-lime.chart-img.v2>
>>>>>>> 5b4054a (.)
>>>>>>> 4ab624f (rebase)
        @endforeach
    @endif
@endsection
