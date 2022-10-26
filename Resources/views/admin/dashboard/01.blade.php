<<<<<<< HEAD
@extends('adm_theme::layouts.app')
@section('content')
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
=======
aaa
>>>>>>> 28d9a7d (.)
