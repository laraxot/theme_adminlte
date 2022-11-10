@inject('layoutHelper', 'Themes\AdminLTE\Helpers\LayoutHelper')

@php($dashboard_url = View::getSection('dashboard_url') ?? config('adm_theme::adminlte.dashboard_url', 'home'))

@if (config('adm_theme::adminlte.use_route_url', false))
    @php($dashboard_url = $dashboard_url ? route($dashboard_url) : '')
@else
    @php($dashboard_url = $dashboard_url ? url($dashboard_url) : '')
@endif

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5dd3b30a (rebase)
=======
>>>>>>> db3db5ed (rebase)
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 905478d (rebase)
=======
>>>>>>> 5a3868d (rebase)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 103222ea (rebase)
=======
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 905478d (rebase)
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
>>>>>>> dfca2a99 (rebase)
=======
>>>>>>> 4ab624f (rebase)
<<<<<<< HEAD
>>>>>>> 5dd3b30a (rebase)
=======
=======
>>>>>>> 3703261 (up)
>>>>>>> db3db5ed (rebase)
=======
>>>>>>> e5945a61 (rebase)
<a href="{{ $dashboard_url }}"
    @if ($layoutHelper->isLayoutTopnavEnabled()) class="navbar-brand {{ config('adm_theme::adminlte.classes_brand') }}"
@else
    class="brand-link {{ config('adm_theme::adminlte.classes_brand') }}" @endif>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
=======
>>>>>>> 5dd3b30a (rebase)
=======
>>>>>>> db3db5ed (rebase)
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
<a href="{{ $dashboard_url }}" @if ($layoutHelper->isLayoutTopnavEnabled())
    class="navbar-brand {{ config('adm_theme::adminlte.classes_brand') }}"
@else
    class="brand-link {{ config('adm_theme::adminlte.classes_brand') }}"
    @endif>
<<<<<<< HEAD
>>>>>>> 31d6e3b (first)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5dd3b30a (rebase)
>>>>>>> 905478d (rebase)
=======
=======
<a href="{{ $dashboard_url }}"
    @if ($layoutHelper->isLayoutTopnavEnabled()) class="navbar-brand {{ config('adm_theme::adminlte.classes_brand') }}"
@else
    class="brand-link {{ config('adm_theme::adminlte.classes_brand') }}" @endif>
>>>>>>> 5b4054a (.)
>>>>>>> 5a3868d (rebase)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 103222ea (rebase)
=======
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> 905478d (rebase)
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
>>>>>>> dfca2a99 (rebase)
=======
>>>>>>> 4ab624f (rebase)
<<<<<<< HEAD
>>>>>>> 5dd3b30a (rebase)
=======
=======
>>>>>>> 3703261 (up)
>>>>>>> db3db5ed (rebase)
=======
>>>>>>> e5945a61 (rebase)

    {{-- Small brand logo
    <img src="{{ Theme::asset(config('adm_theme::adminlte.logo_img', 'vendor/adminlte/dist/img/AdminLTELogo.png')) }}"
        alt="{{ config('adm_theme::adminlte.logo_img_alt', 'AdminLTE') }}"
        class="{{ config('adm_theme::adminlte.logo_img_class', 'brand-image img-circle elevation-3') }}" style="opacity:.8">

    Brand text
    <span class="brand-text font-weight-light {{ config('adm_theme::adminlte.classes_brand_text') }}">
        {!! config('adm_theme::adminlte.logo', '<b>Admin</b>LTE') !!}
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
    </span> --}}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
=======
>>>>>>> 5dd3b30a (rebase)
    </span> --}}
=======
    </span>
    --}}
>>>>>>> 31d6e3b (first)
=======
    </span>
    --}}
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5dd3b30a (rebase)
>>>>>>> 905478d (rebase)
=======
=======
    </span> --}}
>>>>>>> 5b4054a (.)
>>>>>>> 5a3868d (rebase)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 103222ea (rebase)
=======
=======
    </span> --}}
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> 905478d (rebase)
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
    </span> --}}
>>>>>>> dfca2a99 (rebase)
=======
>>>>>>> 4ab624f (rebase)
<<<<<<< HEAD
>>>>>>> 5dd3b30a (rebase)
=======
=======
>>>>>>> 3703261 (up)
>>>>>>> db3db5ed (rebase)
=======
>>>>>>> e5945a61 (rebase)
</a>
