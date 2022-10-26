<<<<<<< HEAD
<<<<<<< HEAD
=======
{{-- @extends('adm_theme::layouts.app')
@section('content')
    DASHBOARD
@endsection --}}



>>>>>>> 7306100 (.)
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
=======
@extends('adm_theme::layouts.app')
@section('content')
    DASHBOARD
@endsection
>>>>>>> 870e170 (.)
=======
>>>>>>> 7306100 (.)
