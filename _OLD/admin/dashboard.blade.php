@extends('adm_theme::layouts.app')
@section('page_heading','DashBoard')

@section('content') 
		
	{{--  Adesso non sono collegati al db, li mettiamo quando li colleghiamo al db
	@include('adm_theme::admin.dashboard.small_boxes')		
	--}}
	@foreach(\Auth::User()->areas as $area) 
		{!! $area->dashboard_widget() !!}  
	@endforeach
@endsection
