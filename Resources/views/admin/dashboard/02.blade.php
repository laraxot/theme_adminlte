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
=======
=======
>>>>>>> 49899e0 (.)
=======
>>>>>>> aa7fac8 (.)
=======
>>>>>>> 326d5c3 (.)
=======
=======
>>>>>>> e0a8e01 (.)
=======
>>>>>>> 2a63e2b (.)
=======
=======
>>>>>>> aa7fac8 (.)
=======
>>>>>>> 326d5c3 (.)
<<<<<<< HEAD
>>>>>>> 21fe4df (.)
{{-- @extends('adm_theme::layouts.app')
@section('content')
    DASHBOARD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3cc23ea (.)
=======
>>>>>>> 7cb5b32 (.)
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
<<<<<<< HEAD
=======
>>>>>>> 21fe4df (.)
=======
=======
>>>>>>> 3cc23ea (.)
>>>>>>> e0a8e01 (.)
=======
>>>>>>> 2a63e2b (.)
@extends('adm_theme::layouts.app')
@section('content')
    DASHBOARD
@endsection
=======
{{-- @extends('adm_theme::layouts.app')
@section('content')
    DASHBOARD
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
@endsection --}}



<<<<<<< HEAD
>>>>>>> 7306100 (.)
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
>>>>>>> 21fe4df (.)
>>>>>>> f36e2bbd (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
@extends('adm_theme::layouts.app')
@section('content')
    DASHBOARD
@endsection
>>>>>>> 870e170 (.)
=======
>>>>>>> 7306100 (.)
=======
>>>>>>> 7306100 (.)
>>>>>>> fac8ac6 (.)
<<<<<<< HEAD
>>>>>>> 49899e0 (.)
=======
=======
>>>>>>> 7306100 (.)
>>>>>>> 3cc23ea (.)
<<<<<<< HEAD
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
>>>>>>> bf0a769b (rebase)
