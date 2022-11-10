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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a5d96216 (rebase)
=======
>>>>>>> c501045a (rebase)
=======
>>>>>>> 39dffdf2 (rebase)
=======
=======
>>>>>>> 49899e0 (.)
=======
>>>>>>> aa7fac8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 326d5c3 (.)
=======
=======
>>>>>>> e0a8e01 (.)
=======
>>>>>>> 2a63e2b (.)
=======
>>>>>>> 6332637 (.)
=======
=======
>>>>>>> aa7fac8 (.)
=======
>>>>>>> 326d5c3 (.)
<<<<<<< HEAD
>>>>>>> 21fe4df (.)
=======
>>>>>>> a5d96216 (rebase)
=======
=======
>>>>>>> 326d5c3 (.)
>>>>>>> c501045a (rebase)
{{-- @extends('adm_theme::layouts.app')
@section('content')
    DASHBOARD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3cc23ea (.)
=======
>>>>>>> 7cb5b32 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 3cc23ea (.)
>>>>>>> a5d96216 (rebase)
=======
@extends('adm_theme::layouts.app')
@section('content')
    DASHBOARD
@endsection
=======
=======
>>>>>>> 49899e0 (.)
{{-- @extends('adm_theme::layouts.app')
@section('content')
    DASHBOARD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> fac8ac6 (.)
=======
>>>>>>> 3cc23ea (.)
=======
=======
<<<<<<< HEAD
>>>>>>> c501045a (rebase)
@extends('adm_theme::layouts.app')
@section('content')
    DASHBOARD
@endsection
=======
>>>>>>> f8b93fb6 (rebase)
=======
=======
>>>>>>> 49899e0 (.)
{{-- @extends('adm_theme::layouts.app')
@section('content')
    DASHBOARD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> fac8ac6 (.)
=======
>>>>>>> 3cc23ea (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21fe4df (.)
=======
=======
>>>>>>> 3cc23ea (.)
>>>>>>> e0a8e01 (.)
=======
>>>>>>> 2a63e2b (.)
=======
=======
<<<<<<< HEAD
>>>>>>> f8b93fb6 (rebase)
@extends('adm_theme::layouts.app')
@section('content')
    DASHBOARD
@endsection
<<<<<<< HEAD
=======
>>>>>>> ce44b3c7 (rebase)
=======
>>>>>>> f8b93fb6 (rebase)
=======
{{-- @extends('adm_theme::layouts.app')
@section('content')
    DASHBOARD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> fac8ac6 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 7cb5b32 (.)
=======
>>>>>>> 21fe4df (.)
=======
=======
>>>>>>> 3cc23ea (.)
>>>>>>> e0a8e01 (.)
=======
>>>>>>> 7cb5b32 (.)
>>>>>>> 2a63e2b (.)
=======
>>>>>>> ce44b3c7 (rebase)
=======
>>>>>>> fac8ac6 (.)
>>>>>>> f8b93fb6 (rebase)
=======
>>>>>>> fac8ac6 (.)
=======
>>>>>>> 3cc23ea (.)
>>>>>>> a5d96216 (rebase)
=======
>>>>>>> fac8ac6 (.)
>>>>>>> 7cb5b32 (.)
>>>>>>> c501045a (rebase)
@endsection --}}



<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 7306100 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 9ef1dcb8 (rebase)
=======
=======
>>>>>>> 1194766 (up)
<<<<<<< HEAD
>>>>>>> 988d4089 (rebase)
=======
=======
>>>>>>> 49899e0 (.)
<<<<<<< HEAD
>>>>>>> 21fe4df (.)
<<<<<<< HEAD
>>>>>>> f36e2bbd (rebase)
=======
=======
=======
>>>>>>> 1194766 (up)
>>>>>>> 6332637 (.)
<<<<<<< HEAD
>>>>>>> 7ed5f009 (rebase)
=======
=======
>>>>>>> 72c6c47 (.)
<<<<<<< HEAD
>>>>>>> e81ef08b (rebase)
=======
=======

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

>>>>>>> 8a5cc0b (.)
<<<<<<< HEAD
>>>>>>> bc832b90 (rebase)
=======
=======
>>>>>>> 5b4054a (.)
>>>>>>> 103222ea (rebase)
=======
>>>>>>> a05b3ba1 (rebase)
=======
>>>>>>> 527eac33 (rebase)
=======
>>>>>>> 7306100 (.)
>>>>>>> ce44b3c7 (rebase)
=======
=======
>>>>>>> 1194766 (up)
>>>>>>> 39dffdf2 (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a5d96216 (rebase)
=======
>>>>>>> c501045a (rebase)
=======
>>>>>>> 39dffdf2 (rebase)
=======
<<<<<<< HEAD
>>>>>>> ce44b3c7 (rebase)
=======
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
=======
>>>>>>> 527eac33 (rebase)
=======
<<<<<<< HEAD
>>>>>>> f8b93fb6 (rebase)
@extends('adm_theme::layouts.app')
@section('content')
    DASHBOARD
@endsection
>>>>>>> 870e170 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7306100 (.)
=======
>>>>>>> 7306100 (.)
>>>>>>> fac8ac6 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a5d96216 (rebase)
>>>>>>> 49899e0 (.)
=======
=======
>>>>>>> 7306100 (.)
>>>>>>> 3cc23ea (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c501045a (rebase)
>>>>>>> aa7fac8 (.)
=======
=======
>>>>>>> 7306100 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 7306100 (.)
>>>>>>> fac8ac6 (.)
>>>>>>> 49899e0 (.)
>>>>>>> 7cb5b32 (.)
>>>>>>> 326d5c3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 9ef1dcb8 (rebase)
=======
=======
>>>>>>> 1194766 (up)
<<<<<<< HEAD
>>>>>>> 988d4089 (rebase)
=======
=======
=======
>>>>>>> 7306100 (.)
>>>>>>> fac8ac6 (.)
>>>>>>> 21fe4df (.)
<<<<<<< HEAD
>>>>>>> f36e2bbd (rebase)
=======
=======
=======
>>>>>>> 2a63e2b (.)
=======
>>>>>>> 7306100 (.)
>>>>>>> fac8ac6 (.)
=======
>>>>>>> 7306100 (.)
>>>>>>> 3cc23ea (.)
<<<<<<< HEAD
>>>>>>> e0a8e01 (.)
<<<<<<< HEAD
>>>>>>> e23f256f (rebase)
=======
=======
=======
>>>>>>> 7306100 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 7306100 (.)
>>>>>>> fac8ac6 (.)
>>>>>>> 49899e0 (.)
>>>>>>> 7cb5b32 (.)
>>>>>>> 2a63e2b (.)
<<<<<<< HEAD
>>>>>>> bf0a769b (rebase)
=======
=======
>>>>>>> 6332637 (.)
>>>>>>> 7ed5f009 (rebase)
=======
>>>>>>> a05b3ba1 (rebase)
=======
>>>>>>> 527eac33 (rebase)
=======
=======
>>>>>>> 7306100 (.)
>>>>>>> ce44b3c7 (rebase)
=======
>>>>>>> 49899e0 (.)
>>>>>>> f8b93fb6 (rebase)
=======
>>>>>>> aa7fac8 (.)
>>>>>>> a5d96216 (rebase)
=======
>>>>>>> c501045a (rebase)
=======
=======
>>>>>>> 1194766 (up)
>>>>>>> 39dffdf2 (rebase)
