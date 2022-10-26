@inject('navbarItemHelper', 'Themes\AdminLTE\Helpers\NavbarItemHelper')

@if ($navbarItemHelper->isSubmenu($item))
<<<<<<< HEAD
    {{-- Dropdown submenu --}}
    @include('adm_theme::layouts.partials.navbar.dropdown-item-submenu')
@elseif ($navbarItemHelper->isLink($item))
    {{-- Dropdown link --}}
    @include('adm_theme::layouts.partials.navbar.dropdown-item-link')
=======

    {{-- Dropdown submenu --}}
    @include('adm_theme::layouts.partials.navbar.dropdown-item-submenu')

@elseif ($navbarItemHelper->isLink($item))

    {{-- Dropdown link --}}
    @include('adm_theme::layouts.partials.navbar.dropdown-item-link')

>>>>>>> 31d6e3b (first)
@endif
