@php
    Theme::add('adm_theme::dist/js/manifest.js', 1);
    Theme::add('adm_theme::dist/js/vendor.js', 2);
    Theme::add('adm_theme::dist/js/app.js', 3);
    //--- la cartella dist viene cancellata
    //Theme::add('adm_theme::js/custom.js', 4);
@endphp

<!-- Include the overlay-component.js script -->
<script src="{{ asset('vendor/wire-elements-pro/js/overlay-component.js') }}"></script>

@livewireScripts

<!-- Require the Modal Pro component -->
@livewire('modal-pro')

{!! Theme::showScripts(false) !!}
<!-- Alpine v3 -->
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<!-- Focus plugin -->
<script defer src="https://unpkg.com/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
@stack('scripts')

{{-- Custom Scripts --}}
@yield('adminlte_js')
@yield('custom_js')
