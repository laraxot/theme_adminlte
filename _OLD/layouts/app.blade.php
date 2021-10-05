@extends('adm_theme::layouts.plane')
@section('body')
	<div class="wrapper">
		@include('adm_theme::layouts.partials.mainheader')
		@include('adm_theme::layouts.partials.sidebar')
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			@include('adm_theme::layouts.partials.contentheader')
			<!-- Main content -->
			<section class="content">
				<!-- Your Page Content Here -->
				@yield('content')
				
			</section><!-- /.content -->
		</div><!-- /.content-wrapper -->
		@include('adm_theme::layouts.partials.controlsidebar')
		@include('adm_theme::layouts.partials.footer')
	</div><!-- ./wrapper -->
@stop
