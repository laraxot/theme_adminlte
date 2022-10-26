<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fbfdfef (rebase)
>>>>>>> 905478d (rebase)
=======
<<<<<<< HEAD
>>>>>>> ee11c8a (rebase)
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d1cab52 (rebase)
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 905478d (rebase)
>>>>>>> 64fad46 (rebase)
<<<<<<< HEAD
>>>>>>> a159d289 (rebase)
=======
=======
>>>>>>> fbfdfef (rebase)
>>>>>>> e4dfa7b4 (rebase)
{{-- @extends('adm_theme::layouts.app')
@section('content')
    DASHBOARD
@endsection --}}



<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 63c2c43 (up)
<<<<<<< HEAD
>>>>>>> 6f3ed7c3 (rebase)
=======
=======



>>>>>>> 8a5cc0b (.)
>>>>>>> bc832b90 (rebase)
=======
>>>>>>> a05b3ba1 (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
=======
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
<<<<<<< HEAD
<<<<<<< HEAD
=======
{{--
>>>>>>> 0e49c35 (up)
@extends('adm_theme::layouts.app')
=======
{{-- @extends('adm_theme::layouts.app')
>>>>>>> 9a4b06e (.)
@section('content')
    DASHBOARD
@endsection --}}
=======
>>>>>>> 28d9a7d (.)
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

<<<<<<< HEAD
=======
=======
=======
{{--
>>>>>>> 0e49c35 (up)
>>>>>>> fbfdfef (rebase)
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
    <livewire:dashboard.tile.question-chart position="" qid="15" />
    {{--  
    <livewire:dashboard.tile.dummy position="c1" />
    --}}
    <livewire:time-weather-tile position="d1" />

    <livewire:chart-tile chartClass="{{Modules\LU\Charts\DailyUsersChart::class}}"  position="a1:b2" />

    
    
    @livewire('chart-tile', [
    'chartClass' => Modules\Quaeris\Charts\QuestionIdChart::class, 
    'chartFilters' => ['question_chart_id'=>5],
    ])
    
</x-dashboard>

>>>>>>> 64fad46 (rebase)
<<<<<<< HEAD
>>>>>>> 31d6e3b (first)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 905478d (rebase)
=======
=======

</x-dashboard>
>>>>>>> 9a4b06e (.)
>>>>>>> d1cab52 (rebase)
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> 905478d (rebase)
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
