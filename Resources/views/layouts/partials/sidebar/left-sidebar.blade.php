<aside class="main-sidebar {{ config('adm_theme::adminlte.classes_sidebar', 'sidebar-dark-primary elevation-4') }}">

    {{-- Sidebar brand logo --}}
    @if (config('adm_theme::adminlte.logo_img_xl'))
        @include('adm_theme::layouts.partials.common.brand-logo-xl')
    @else
        @include('adm_theme::layouts.partials.common.brand-logo-xs')
    @endif


    {{-- Sidebar menu --}}
    <div class="sidebar">
        <nav class="pt-2">
            <ul class="nav nav-pills nav-sidebar flex-column {{ config('adm_theme::adminlte.classes_sidebar_nav', '') }}"
<<<<<<< HEAD
<<<<<<< HEAD
                data-widget="treeview" role="menu"
                @if (config('adm_theme::adminlte.sidebar_nav_animation_speed') != 300) data-animation-speed="{{ config('adm_theme::adminlte.sidebar_nav_animation_speed') }}" @endif
                @if (!config('adm_theme::adminlte.sidebar_nav_accordion')) data-accordion="false" @endif>
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
                data-widget="treeview" role="menu" @if (config('adm_theme::adminlte.sidebar_nav_animation_speed') != 300)
                data-animation-speed="{{ config('adm_theme::adminlte.sidebar_nav_animation_speed') }}"
                @endif
                @if (!config('adm_theme::adminlte.sidebar_nav_accordion'))
                    data-accordion="false"
                @endif>
<<<<<<< HEAD
>>>>>>> 31d6e3b (first)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
                {{-- Configured sidebar links --}}
                {{-- dddx($adminlte->menu('sidebar')) --}}
                @each('adm_theme::layouts.partials.sidebar.menu-item', $adminlte->menu('sidebar'), 'item')
            </ul>
        </nav>
    </div>

</aside>
