<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">

		@include('adm_theme::layouts.partials.sidebar.userpanel')
		{{-- @include('adm_theme::layouts.partials.sidebar.searchform') --}}
		@include('adm_theme::layouts.partials.sidebar.menu_areas')
        @include('adm_theme::layouts.partials.sidebar.menu')

	</section>
	<!-- /.sidebar -->
</aside>
