{{--
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

