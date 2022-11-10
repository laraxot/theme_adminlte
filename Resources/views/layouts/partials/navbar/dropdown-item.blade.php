@inject('navbarItemHelper', 'Themes\AdminLTE\Helpers\NavbarItemHelper')

@if ($navbarItemHelper->isSubmenu($item))
    {{-- Dropdown submenu --}}
    @include('adm_theme::layouts.partials.navbar.dropdown-item-submenu')
@elseif ($navbarItemHelper->isLink($item))
    {{-- Dropdown link --}}
    @include('adm_theme::layouts.partials.navbar.dropdown-item-link')
@endif
