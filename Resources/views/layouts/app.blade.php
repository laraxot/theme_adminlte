@extends('adm_theme::layouts.plane')

@inject('layoutHelper', 'Themes\AdminLTE\Helpers\LayoutHelper')

@section('adminlte_css')
    @stack('css')
    @yield('css')
@stop

@section('classes_body', $layoutHelper->makeBodyClasses())
@section('body_data', $layoutHelper->makeBodyData())

@section('body')



    <div class="wrapper">

<<<<<<< HEAD
        <!-- Preloader -->
        {{-- <div class="preloader">
=======
          <!-- Preloader -->
        <div class="preloader">
>>>>>>> 31d6e3b (first)
            <div class="row">
                <div class="col-md-12 justify-content-center">
                <div class="spinner-border text-success" style="width: 3rem; height: 3rem;"  role="status">
                  <span class="sr-only">Loading...</span>
                </div>
            </div>
            </div>
<<<<<<< HEAD
        </div> --}}
=======
        </div>
>>>>>>> 31d6e3b (first)


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
        @if (config('adm_theme::adminlte.right_sidebar'))
            @include('adm_theme::layouts.partials.sidebar.right-sidebar')
        @endif
    </div>
@stop

@section('adminlte_js')
    @stack('js')
    @yield('js')
@stop
