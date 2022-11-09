@inject('navbarItemHelper', 'Themes\AdminLTE\Helpers\NavbarItemHelper')

@if ($navbarItemHelper->isSubmenu($item))
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 905478d (rebase)
=======
>>>>>>> 5a3868d (rebase)
=======
>>>>>>> d79d738 (up)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 905478d (rebase)
>>>>>>> 64fad46 (rebase)
    {{-- Dropdown submenu --}}
    @include('adm_theme::layouts.partials.navbar.dropdown-item-submenu')
@elseif ($navbarItemHelper->isLink($item))
    {{-- Dropdown link --}}
    @include('adm_theme::layouts.partials.navbar.dropdown-item-link')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
=======
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")

<<<<<<< HEAD
=======
>>>>>>> 5b4054a (.)
    {{-- Dropdown submenu --}}
    @include('adm_theme::layouts.partials.navbar.dropdown-item-submenu')
@elseif ($navbarItemHelper->isLink($item))
    {{-- Dropdown link --}}
    @include('adm_theme::layouts.partials.navbar.dropdown-item-link')
<<<<<<< HEAD
=======
    {{-- Dropdown submenu --}}
    @include('adm_theme::layouts.partials.navbar.dropdown-item-submenu')

@elseif ($navbarItemHelper->isLink($item))

    {{-- Dropdown link --}}
    @include('adm_theme::layouts.partials.navbar.dropdown-item-link')
>>>>>>> 64fad46 (rebase)

<<<<<<< HEAD
>>>>>>> 31d6e3b (first)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 905478d (rebase)
=======
=======
>>>>>>> 5b4054a (.)
>>>>>>> 5a3868d (rebase)
=======
>>>>>>> d79d738 (up)
=======
>>>>>>> 905478d (rebase)
>>>>>>> 64fad46 (rebase)
@endif
