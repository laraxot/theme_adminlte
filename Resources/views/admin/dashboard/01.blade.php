@extends('adm_theme::layouts.app')
@section('content')
    DASHBOARD
    @foreach($profile->areas() as $area)
        <x-dashboard.item.area :area="$area" ></x-dashboard.item.area>
    @endforeach
@endsection
