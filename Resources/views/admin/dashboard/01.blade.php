<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 49899e0 (.)
>>>>>>> 7cb5b32 (.)
@extends('adm_theme::layouts.app')
@section('content')
    DASHBOARD
@endsection
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 3cc23ea (.)
=======
<<<<<<< HEAD
>>>>>>> 7306100 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 7cb5b32 (.)
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
>>>>>>> fac8ac6 (.)
=======
>>>>>>> 3cc23ea (.)
=======
>>>>>>> fac8ac6 (.)
>>>>>>> 49899e0 (.)
>>>>>>> 7cb5b32 (.)