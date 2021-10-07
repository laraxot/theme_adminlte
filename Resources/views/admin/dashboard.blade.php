@extends('adm_theme::layouts.app')

@inject('layoutHelper', 'Themes\AdminLTE\Helpers\LayoutHelper')
@section('adminlte_css')
    @stack('css')
    @yield('css')
@stop

@section('classes_body', $layoutHelper->makeBodyClasses())
@section('body_data', $layoutHelper->makeBodyData())

@section('body')
    <div class="wrapper">
        @include('adm_theme::layouts.partials.navbar.navbar-layout-topnav')
        {{-- Top Navbar --}}
        @if ($layoutHelper->isLayoutTopnavEnabled())
            @include('adm_theme::layouts.partials.navbar.navbar-layout-topnav')
        @else
            @include('adm_theme::layouts.partials.navbar.navbar')
        @endif

        {{-- Left Main Sidebar --}}
        @if (!$layoutHelper->isLayoutTopnavEnabled())
            @include('adm_theme::layouts.partials.sidebar.left-sidebar')
        @endif

        {{-- Content Wrapper --}}
        @empty($iFrameEnabled)
            @include('adm_theme::layouts.partials.cwrapper.cwrapper-default')
        @else
            @include('adm_theme::layouts.partials.cwrapper.cwrapper-iframe')
        @endempty

        {{-- Footer --}}
        @hasSection('footer')
            @include('adm_theme::layouts.partials.footer.footer')
        @endif

        {{-- Right Control Sidebar --}}
        @if (config('adminlte.right_sidebar'))
            @include('adm_theme::layouts.partials.sidebar.right-sidebar')
        @endif
    </div>
@stop

@section('adminlte_js')
    @stack('js')
    @yield('js')
@stop
