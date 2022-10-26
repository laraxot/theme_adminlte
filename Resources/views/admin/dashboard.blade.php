<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
=======
{{--
>>>>>>> 0e49c35 (up)
@extends('adm_theme::layouts.app')
@section('content')
    DASHBOARD
@endsection
--}}
<x-dashboard>
    {{-- replace this by any tiles --}}
    {{--
    <livewire:time-weather-tile position="a1" />
    <livewire:time-weather-tile position="b1" />
    --}}
    <livewire:dashboard.tile.dummy position="c1" />
    <livewire:time-weather-tile position="d1" />

    <livewire:chart-tile chartClass="{{Modules\LU\Charts\DailyUsersChart::class}}" position="a1:b2" />
    
    {{--
    @livewire('chart-tile', [
    'chartClass' => Modules\LU\Charts\DailyUsersChart::class, 
    'chartFilters' => ['type' => 'customer'],
    ])
    --}}
</x-dashboard>

<<<<<<< HEAD
>>>>>>> 31d6e3b (first)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
