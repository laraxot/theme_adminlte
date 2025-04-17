<nav
    class="main-header navbar
    {{ config('adm_theme::adminlte.classes_topnav_nav', 'navbar-expand') }}
    {{ config('adm_theme::adminlte.classes_topnav', 'navbar-white navbar-light') }}">


    {{-- Navbar left links --}}
    <ul class="navbar-nav">
        {{-- Left sidebar toggler link --}}
        @include('adm_theme::layouts.partials.navbar.menu-item-left-sidebar-toggler')

        {{-- Configured left links --}}
        @each('adm_theme::layouts.partials.navbar.menu-item', $adminlte->menu('navbar-left'), 'item')

        {{-- Custom left links --}}
        @yield('content_top_nav_left')
    </ul>

    <a class="navbar-brand" href="{{ url('/admin') }}"><small>backend</small></a>
    <a class="navbar-brand" href="{{ url('/') }}" target="_blank"><small>frontend</small></a>


    {{-- Navbar right links --}}
    <ul class="navbar-nav ml-auto">

        {{-- Custom right links --}}
        @yield('content_top_nav_right')

        {{-- Configured right links --}}
        @each('adm_theme::layouts.partials.navbar.menu-item', $adminlte->menu('navbar-right'), 'item')

        {{-- User menu link --}}
        @if (Auth::user())
            @if (config('adm_theme::adminlte.usermenu_enabled'))
                @include('adm_theme::layouts.partials.navbar.menu-item-dropdown-user-menu')
            @else
                @include('adm_theme::layouts.partials.navbar.menu-item-logout-link')
            @endif
        @endif

        {{-- Right sidebar toggler link --}}
        @if (config('adm_theme::adminlte.right_sidebar'))
            @include('adm_theme::layouts.partials.navbar.menu-item-right-sidebar-toggler')
        @endif
    </ul>



</nav>
