 {{--
     Base Scripts
    @if (!config('adm_theme::adminlte.enabled_laravel_mix'))
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

         Configured Scripts
        @include('adm_theme::layouts.partials.plugins', ['type' => 'js'])

        <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
    @else
        <script src="{{ mix(config('adm_theme::adminlte.laravel_mix_js_path', 'js/app.js')) }}"></script>
    @endif

    <script src="{{ Theme::asset('adm_theme::dist/js/manifest.js') }}"></script>
    <script src="{{ Theme::asset('adm_theme::dist/js/vendor.js') }}"></script>
    <scrip src="{{ Theme::asset('adm_theme::dist/js/admin-lte.js') }}"></script>
--}}
@php
    Theme::add('adm_theme::dist/js/manifest.js');
    Theme::add('adm_theme::dist/js/vendor.js');
    Theme::add('adm_theme::dist/js/admin-lte.js');
@endphp
{!! Theme::showScripts() !!}

<livewire:scripts />

{{-- Custom Scripts --}}
@yield('adminlte_js')
