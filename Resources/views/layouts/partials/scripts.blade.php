@php
Theme::add('adm_theme::dist/js/manifest.js', 1);
Theme::add('adm_theme::dist/js/vendor.js', 2);
Theme::add('adm_theme::dist/js/app.js', 3);
Theme::add('adm_theme::dist/js/custom.js', 4);
@endphp

@livewireScripts
<<<<<<< HEAD

=======
>>>>>>> 31d6e3b (first)
{!! Theme::showScripts(false) !!}

@stack('scripts')

{{-- Custom Scripts --}}
@yield('adminlte_js')
@yield('custom_js')
