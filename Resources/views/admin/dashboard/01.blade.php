@extends('adm_theme::layouts.app')
@section('content')
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b6bf7b3 (rebase)
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
=======
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
=======
>>>>>>> 1194766 (up)
=======
>>>>>>> fac8ac6 (.)
>>>>>>> 21fe4df (.)
=======
>>>>>>> fac8ac6 (.)
=======
>>>>>>> 3cc23ea (.)
>>>>>>> e0a8e01 (.)
=======
>>>>>>> fac8ac6 (.)
=======
>>>>>>> 3cc23ea (.)
=======
>>>>>>> fac8ac6 (.)
>>>>>>> 49899e0 (.)
>>>>>>> 7cb5b32 (.)
>>>>>>> 2a63e2b (.)
=======
>>>>>>> 6332637 (.)
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
=======
>>>>>>> 63c2c43 (up)
=======
@endsection
>>>>>>> 8a5cc0b (.)
>>>>>>> b6bf7b3 (rebase)
