<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 9ef1dcb8 (rebase)
=======
<<<<<<< HEAD
>>>>>>> 988d4089 (rebase)
=======
<<<<<<< HEAD
>>>>>>> f36e2bbd (rebase)
=======
<<<<<<< HEAD
>>>>>>> e23f256f (rebase)
=======
<<<<<<< HEAD
>>>>>>> bf0a769b (rebase)
=======
<<<<<<< HEAD
>>>>>>> 7ed5f009 (rebase)
=======
>>>>>>> a05b3ba1 (rebase)
@extends('adm_theme::layouts.app')
@section('content')
    @php
        //dddx($profile->areas());
    @endphp
    DASHBOARD
    <div class="row">
        @foreach ($profile->areas() as $area)
            <x-dashboard.item.area :area="$area"></x-dashboard.item.area>
        @endforeach
    </div>
@endsection
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 103222ea (rebase)
=======
>>>>>>> 7c172462 (rebase)
=======
>>>>>>> 02c8c035 (rebase)
=======
aaa
>>>>>>> 28d9a7d (.)
=======
>>>>>>> 326d5c3 (.)
=======
>>>>>>> 2a63e2b (.)
=======
{{-- @extends('adm_theme::layouts.app')
@section('content')
    DASHBOARD
@endsection --}}



<x-dashboard>
    {{-- replace this by any tiles --}}
    {{-- <livewire:time-weather-tile position="a1" />
    <livewire:time-weather-tile position="b1" /> --}}

    {{-- <livewire:dashboard.tile.dummy position="c1" /> --}}
    <livewire:time-weather-tile position="a1:a2" />
    <livewire:chart-tile chartClass="{{ Modules\LU\Charts\DailyUsersChart::class }}" position="b1:b2" />

    <livewire:chart-tile chartClass="{{ Modules\Chart\Charts\ExampleBarChart::class }}" position="a3:a4" />
    {{-- <livewire:dashboard.tile.question-chart position="a3:a4" qid="15" /> --}}


    @livewire('chart-tile', [
        'chartClass' => Modules\Quaeris\Charts\QuestionIdChart::class,
        'chartFilters' => ['question_chart_id' => 5],
        'position' => 'b3:b4',
    ])


</x-dashboard>
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 870e170 (.)
=======
=======
>>>>>>> 49899e0 (.)
=======
>>>>>>> aa7fac8 (.)
=======
=======
>>>>>>> 2a63e2b (.)
=======
=======
>>>>>>> 49899e0 (.)
>>>>>>> 7cb5b32 (.)
<<<<<<< HEAD
>>>>>>> 326d5c3 (.)
=======
>>>>>>> 1194766 (up)
=======
>>>>>>> 21fe4df (.)
=======
>>>>>>> e0a8e01 (.)
=======
>>>>>>> 2a63e2b (.)
=======
>>>>>>> 6332637 (.)
@extends('adm_theme::layouts.app')
@section('content')
<<<<<<< HEAD
=======
>>>>>>> 63c2c43 (up)
    DASHBOARD
    <div class="row">
    @foreach($profile->areas() as $area)
        <x-dashboard.item.area :area="$area" ></x-dashboard.item.area>
    @endforeach
    </div>
@endsection
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 7306100 (.)
=======
=======
>>>>>>> 326d5c3 (.)
=======
>>>>>>> 2a63e2b (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 3cc23ea (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2a63e2b (.)
=======
<<<<<<< HEAD
>>>>>>> 7306100 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 7cb5b32 (.)
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> 21fe4df (.)
=======
>>>>>>> e0a8e01 (.)
=======
>>>>>>> 2a63e2b (.)
{{-- @extends('adm_theme::layouts.app')
@section('content')
    DASHBOARD
@endsection --}}



<x-dashboard>
    {{-- replace this by any tiles --}}
    {{-- <livewire:time-weather-tile position="a1" />
    <livewire:time-weather-tile position="b1" /> --}}

    {{-- <livewire:dashboard.tile.dummy position="c1" /> --}}
    <livewire:time-weather-tile position="a1:a2" />
    <livewire:chart-tile chartClass="{{ Modules\LU\Charts\DailyUsersChart::class }}" position="b1:b2" />

    <livewire:chart-tile chartClass="{{ Modules\Chart\Charts\ExampleBarChart::class }}" position="a3:a4" />
    {{-- <livewire:dashboard.tile.question-chart position="a3:a4" qid="15" /> --}}


    @livewire('chart-tile', [
        'chartClass' => Modules\Quaeris\Charts\QuestionIdChart::class,
        'chartFilters' => ['question_chart_id' => 5],
        'position' => 'b3:b4',
    ])


</x-dashboard>
=======
@extends('adm_theme::layouts.app')
@section('content')
    DASHBOARD
@endsection
>>>>>>> 7306100 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> fac8ac6 (.)
<<<<<<< HEAD
>>>>>>> 49899e0 (.)
=======
=======
>>>>>>> 3cc23ea (.)
<<<<<<< HEAD
>>>>>>> aa7fac8 (.)
=======
=======
>>>>>>> fac8ac6 (.)
>>>>>>> 49899e0 (.)
>>>>>>> 7cb5b32 (.)
>>>>>>> 326d5c3 (.)
<<<<<<< HEAD
>>>>>>> 9ef1dcb8 (rebase)
=======
=======
>>>>>>> 1194766 (up)
<<<<<<< HEAD
>>>>>>> 988d4089 (rebase)
=======
=======
>>>>>>> fac8ac6 (.)
>>>>>>> 21fe4df (.)
<<<<<<< HEAD
>>>>>>> f36e2bbd (rebase)
=======
=======
>>>>>>> fac8ac6 (.)
=======
>>>>>>> 3cc23ea (.)
>>>>>>> e0a8e01 (.)
<<<<<<< HEAD
>>>>>>> e23f256f (rebase)
=======
=======
>>>>>>> fac8ac6 (.)
=======
>>>>>>> 3cc23ea (.)
=======
>>>>>>> fac8ac6 (.)
>>>>>>> 49899e0 (.)
>>>>>>> 7cb5b32 (.)
>>>>>>> 2a63e2b (.)
<<<<<<< HEAD
>>>>>>> bf0a769b (rebase)
=======
=======
>>>>>>> 6332637 (.)
<<<<<<< HEAD
>>>>>>> 7ed5f009 (rebase)
=======
=======
=======
>>>>>>> 8a5cc0b (.)
@php
use Modules\Quaeris\Services\LimeModelService;

$customer = $profile->getProfile()->customers->first();
$survey = $customer->surveyPdfs->last();
$lime = LimeModelService::make()->setSurveyId((string) $survey->survey_id);
$questions = $lime->getQuestions();
$question = $questions->last();
$answers = $lime->getAnswersByQuestionId((string) 30342);
@endphp
@php dddx($answers); @endphp
<<<<<<< HEAD
@endsection
>>>>>>> b738e1c (rebase)
<<<<<<< HEAD
>>>>>>> 312af933 (rebase)
=======
=======
>>>>>>> 63c2c43 (up)
<<<<<<< HEAD
>>>>>>> 6f3ed7c3 (rebase)
=======
=======
@endsection
>>>>>>> 8a5cc0b (.)
<<<<<<< HEAD
>>>>>>> bc832b90 (rebase)
=======
=======
>>>>>>> 5b4054a (.)
<<<<<<< HEAD
>>>>>>> 103222ea (rebase)
=======
=======
=======

@endsection
>>>>>>> Stashed changes
>>>>>>> ffc2572 (.)
<<<<<<< HEAD
>>>>>>> 7c172462 (rebase)
=======
=======
>>>>>>> 6864355 (up)
>>>>>>> 02c8c035 (rebase)
=======
>>>>>>> a05b3ba1 (rebase)
