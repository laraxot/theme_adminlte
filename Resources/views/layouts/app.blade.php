@extends('adm_theme::layouts.plane')

@inject('layoutHelper', 'Themes\KlekooAdm\Helpers\LayoutHelper')

@section('adminlte_css')
    @stack('css')
    @yield('css')
@stop

@section('classes_body', $layoutHelper->makeBodyClasses())
@section('body_data', $layoutHelper->makeBodyData())

@section('body')

@php
dddx(get_defined_vars())
@endphp

    <div class="wrapper">
<<<<<<< HEAD
<<<<<<< HEAD

        <!-- Preloader -->
        {{-- <div class="preloader">
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        <!-- Preloader -->
        {{-- <div class="preloader">
=======
          <!-- Preloader -->
=======
        <!-- Preloader -->
        {{--
>>>>>>> ac76b2e (.)
=======
>>>>>>> 63c2c43 (up)
=======

        <!-- Preloader -->
<<<<<<< HEAD
        {{--
>>>>>>> 8a5cc0b (.)
        <div class="preloader">
>>>>>>> 31d6e3b (first)
=======
          <!-- Preloader -->
        <div class="preloader">
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
<<<<<<< HEAD
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
>>>>>>> 2c813d8e (rebase)
=======
=======
=======
        {{-- <div class="preloader">
>>>>>>> 5b4054a (.)
>>>>>>> 5a3868d (rebase)
>>>>>>> 103222ea (rebase)
            <div class="row">
                <div class="col-md-12 justify-content-center">
                <div class="spinner-border text-success" style="width: 3rem; height: 3rem;"  role="status">
                  <span class="sr-only">Loading...</span>
                </div>
            </div>
<<<<<<< HEAD
<<<<<<< HEAD
            </div>
        </div> --}}
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
        </div> --}}
=======
        </div>
<<<<<<< HEAD
>>>>>>> 31d6e3b (first)
=======
        </div>
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
<<<<<<< HEAD
>>>>>>> 905478d (rebase)
=======
=======
        --}}
>>>>>>> ac76b2e (.)
>>>>>>> 5e67a8b (rebase)
>>>>>>> 2c813d8e (rebase)

=======
        </div>
>>>>>>> 63c2c43 (up)
=======
            </div>
        </div> --}}

>>>>>>> 8a5cc0b (.)

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
