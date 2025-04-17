@inject('layoutHelper', 'Themes\AdminLTE\Helpers\LayoutHelper')

@php($dashboard_url = View::getSection('dashboard_url') ?? config('adm_theme::adminlte.dashboard_url', 'home'))

@if (config('adm_theme::adminlte.use_route_url', false))
    @php($dashboard_url = $dashboard_url ? route($dashboard_url) : '')
@else
    @php($dashboard_url = $dashboard_url ? url($dashboard_url) : '')
@endif

<a href="{{ $dashboard_url }}"
    @if ($layoutHelper->isLayoutTopnavEnabled()) class="navbar-brand {{ config('adm_theme::adminlte.classes_brand') }}"
@else
    class="brand-link {{ config('adm_theme::adminlte.classes_brand') }}" @endif>

    {{-- Small brand logo
    <img src="{{ Theme::asset(config('adm_theme::adminlte.logo_img', 'vendor/adminlte/dist/img/AdminLTELogo.png')) }}"
        alt="{{ config('adm_theme::adminlte.logo_img_alt', 'AdminLTE') }}"
        class="{{ config('adm_theme::adminlte.logo_img_class', 'brand-image img-circle elevation-3') }}" style="opacity:.8">

    Brand text
    <span class="brand-text font-weight-light {{ config('adm_theme::adminlte.classes_brand_text') }}">
        {!! config('adm_theme::adminlte.logo', '<b>Admin</b>LTE') !!}
    </span> --}}
</a>
