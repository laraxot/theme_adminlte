@extends('adm_theme::layouts.app')
@section('content')
<<<<<<< Updated upstream
    DASHBOARD
    <div class="row">
        @foreach ($profile->areas() as $area)
            <x-dashboard.item.area :area="$area"></x-dashboard.item.area>
        @endforeach
    </div>
@endsection
=======

@endsection
>>>>>>> Stashed changes
