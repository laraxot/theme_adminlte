<<<<<<< HEAD
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
<<<<<<< HEAD
=======
>>>>>>> fbfdfef (rebase)
=======
>>>>>>> b4122f6 (rebase)
>>>>>>> 905478d (rebase)
=======
<<<<<<< HEAD
>>>>>>> ee11c8a (rebase)
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> e4dfa7b4 (rebase)
=======
=======
=======
<<<<<<< HEAD
>>>>>>> d1cab52 (rebase)
>>>>>>> b4122f6 (rebase)
>>>>>>> 39226822 (rebase)
=======
>>>>>>> dfca2a99 (rebase)
{{-- @extends('adm_theme::layouts.app')
@section('content')
    DASHBOARD
@endsection --}}
<<<<<<< HEAD
<<<<<<< HEAD



<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD



<<<<<<< HEAD
=======
>>>>>>> 63c2c43 (up)
>>>>>>> 543f78f7 (rebase)
=======
>>>>>>> db3db5ed (rebase)
=======
>>>>>>> 3703261 (up)



<<<<<<< HEAD
>>>>>>> 8a5cc0b (.)
<<<<<<< HEAD
>>>>>>> bc832b90 (rebase)
=======
>>>>>>> a05b3ba1 (rebase)
=======
>>>>>>> 24497830 (rebase)
=======
=======
>>>>>>> 63c2c43 (up)
>>>>>>> 9a582057 (rebase)
=======
>>>>>>> dfca2a99 (rebase)
=======
=======
>>>>>>> db3db5ed (rebase)
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
=======
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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
>>>>>>> b6bf7b3 (rebase)
>>>>>>> 543f78f7 (rebase)
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
<<<<<<< HEAD
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
=======
>>>>>>> b4122f6 (rebase)
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

>>>>>>> 64fad46 (rebase)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 31d6e3b (first)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b4122f6 (rebase)
>>>>>>> 905478d (rebase)
=======
=======

</x-dashboard>
>>>>>>> 9a4b06e (.)
>>>>>>> d1cab52 (rebase)
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> 905478d (rebase)
>>>>>>> 64fad46 (rebase)
<<<<<<< HEAD
>>>>>>> a159d289 (rebase)
=======
=======
>>>>>>> b4122f6 (rebase)
>>>>>>> 39226822 (rebase)
=======
>>>>>>> dfca2a99 (rebase)
=======
=======
>>>>>>> 3703261 (up)
>>>>>>> db3db5ed (rebase)
