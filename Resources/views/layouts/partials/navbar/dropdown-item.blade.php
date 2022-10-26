@inject('navbarItemHelper', 'Themes\AdminLTE\Helpers\NavbarItemHelper')

@if ($navbarItemHelper->isSubmenu($item))
<<<<<<< HEAD
<<<<<<< HEAD
    {{-- Dropdown submenu --}}
    @include('adm_theme::layouts.partials.navbar.dropdown-item-submenu')
@elseif ($navbarItemHelper->isLink($item))
    {{-- Dropdown link --}}
    @include('adm_theme::layouts.partials.navbar.dropdown-item-link')
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")

    {{-- Dropdown submenu --}}
    @include('adm_theme::layouts.partials.navbar.dropdown-item-submenu')

@elseif ($navbarItemHelper->isLink($item))

    {{-- Dropdown link --}}
    @include('adm_theme::layouts.partials.navbar.dropdown-item-link')

<<<<<<< HEAD
>>>>>>> 31d6e3b (first)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
@endif
