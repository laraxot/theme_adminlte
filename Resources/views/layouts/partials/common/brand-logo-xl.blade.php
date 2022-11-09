@inject('layoutHelper', 'Themes\AdminLTE\Helpers\LayoutHelper')

@php($dashboard_url = View::getSection('dashboard_url') ?? config('adm_theme::adminlte.dashboard_url', 'home'))

@if (config('adm_theme::adminlte.use_route_url', false))
    @php($dashboard_url = $dashboard_url ? route($dashboard_url) : '')
@else
    @php($dashboard_url = $dashboard_url ? url($dashboard_url) : '')
@endif

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 905478d7 (rebase)
<a href="{{ $dashboard_url }}"
    @if ($layoutHelper->isLayoutTopnavEnabled()) class="navbar-brand logo-switch {{ config('adm_theme::adminlte.classes_brand') }}"
@else
    class="brand-link logo-switch {{ config('adm_theme::adminlte.classes_brand') }}" @endif>
    {{-- <!-- Small brand logo  -->
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
<a href="{{ $dashboard_url }}" @if ($layoutHelper->isLayoutTopnavEnabled())
    class="navbar-brand logo-switch {{ config('adm_theme::adminlte.classes_brand') }}"
@else
    class="brand-link logo-switch {{ config('adm_theme::adminlte.classes_brand') }}"
    @endif>
    {{--
    <!-- Small brand logo  -->
<<<<<<< HEAD
>>>>>>> 31d6e3b (first)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
    <img src="{{ Theme::asset(config('adm_theme::adminlte.logo_img', 'vendor/adminlte/dist/img/AdminLTELogo.png')) }}"
        alt="{{ config('adm_theme::adminlte.logo_img_alt', 'AdminLTE') }}"
        class="{{ config('adm_theme::adminlte.logo_img_class', 'brand-image-xl') }} logo-xs">

    <!-- Large brand logo -->
    <img src="{{ Theme::asset(config('adm_theme::adminlte.logo_img_xl')) }}" alt="{{ config('adm_theme::adminlte.logo_img_alt', 'AdminLTE') }}"
<<<<<<< HEAD
        class="{{ config('adm_theme::adminlte.logo_img_xl_class', 'brand-image-xs') }} logo-xl"> --}}
=======
<<<<<<< HEAD
<<<<<<< HEAD
        class="{{ config('adm_theme::adminlte.logo_img_xl_class', 'brand-image-xs') }} logo-xl"> --}}
=======
        class="{{ config('adm_theme::adminlte.logo_img_xl_class', 'brand-image-xs') }} logo-xl">
    --}}
>>>>>>> 31d6e3b (first)
=======
        class="{{ config('adm_theme::adminlte.logo_img_xl_class', 'brand-image-xs') }} logo-xl">
    --}}
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
</a>
