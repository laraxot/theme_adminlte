@inject('layoutHelper', 'Themes\KlekooAdm\Helpers\LayoutHelper')

@php($dashboard_url = View::getSection('dashboard_url') ?? config('adm_theme::adminlte.dashboard_url', 'home'))

@if (config('adm_theme::adminlte.use_route_url', false))
    @php($dashboard_url = $dashboard_url ? route($dashboard_url) : '')
@else
    @php($dashboard_url = $dashboard_url ? url($dashboard_url) : '')
@endif

<a href="{{ $dashboard_url }}" @if ($layoutHelper->isLayoutTopnavEnabled())
    class="navbar-brand logo-switch {{ config('adm_theme::adminlte.classes_brand') }}"
@else
    class="brand-link logo-switch {{ config('adm_theme::adminlte.classes_brand') }}"
    @endif>
    {{--
    <!-- Small brand logo  -->
    <img src="{{ Theme::asset(config('adm_theme::adminlte.logo_img', 'vendor/adminlte/dist/img/AdminLTELogo.png')) }}"
        alt="{{ config('adm_theme::adminlte.logo_img_alt', 'AdminLTE') }}"
        class="{{ config('adm_theme::adminlte.logo_img_class', 'brand-image-xl') }} logo-xs">

    <!-- Large brand logo -->
    <img src="{{ Theme::asset(config('adm_theme::adminlte.logo_img_xl')) }}" alt="{{ config('adm_theme::adminlte.logo_img_alt', 'AdminLTE') }}"
        class="{{ config('adm_theme::adminlte.logo_img_xl_class', 'brand-image-xs') }} logo-xl">
    --}}
</a>
