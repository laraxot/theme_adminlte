@php
Theme::add('adm_theme::dist/js/manifest.js', 1);
Theme::add('adm_theme::dist/js/vendor.js', 2);
Theme::add('adm_theme::dist/js/app.js', 3);
Theme::add('adm_theme::dist/js/custom.js', 4);
@endphp

@livewireScripts
<<<<<<< HEAD
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 31d6e3b (first)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
=======

>>>>>>> d79d738c (up)
{!! Theme::showScripts(false) !!}

@stack('scripts')

{{-- Custom Scripts --}}
@yield('adminlte_js')
@yield('custom_js')
