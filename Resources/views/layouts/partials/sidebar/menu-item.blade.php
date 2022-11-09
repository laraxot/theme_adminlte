@inject('sidebarItemHelper', 'Themes\AdminLTE\Helpers\SidebarItemHelper')

@if ($sidebarItemHelper->isHeader($item))
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
    {{-- Header --}}
    @include('adm_theme::layouts.partials.sidebar.menu-item-header')
@elseif ($sidebarItemHelper->isLegacySearch($item) || $sidebarItemHelper->isCustomSearch($item))
    {{-- Search form --}}
    @include('adm_theme::layouts.partials.sidebar.menu-item-search-form')
@elseif ($sidebarItemHelper->isMenuSearch($item))
    {{-- Search menu --}}
    @include('adm_theme::layouts.partials.sidebar.menu-item-search-menu')
@elseif ($sidebarItemHelper->isSubmenu($item))
    {{-- Treeview menu --}}
    @include('adm_theme::layouts.partials.sidebar.menu-item-treeview-menu')
@elseif ($sidebarItemHelper->isLink($item))
    {{-- Link --}}
    @include('adm_theme::layouts.partials.sidebar.menu-item-link')
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
    {{-- Header --}}
    @include('adm_theme::layouts.partials.sidebar.menu-item-header')
@elseif ($sidebarItemHelper->isLegacySearch($item) || $sidebarItemHelper->isCustomSearch($item))
    {{-- Search form --}}
    @include('adm_theme::layouts.partials.sidebar.menu-item-search-form')
@elseif ($sidebarItemHelper->isMenuSearch($item))
    {{-- Search menu --}}
    @include('adm_theme::layouts.partials.sidebar.menu-item-search-menu')
@elseif ($sidebarItemHelper->isSubmenu($item))
    {{-- Treeview menu --}}
    @include('adm_theme::layouts.partials.sidebar.menu-item-treeview-menu')
@elseif ($sidebarItemHelper->isLink($item))
    {{-- Link --}}
    @include('adm_theme::layouts.partials.sidebar.menu-item-link')
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    {{-- Header --}}
    @include('adm_theme::layouts.partials.sidebar.menu-item-header')

@elseif ($sidebarItemHelper->isLegacySearch($item) || $sidebarItemHelper->isCustomSearch($item))

    {{-- Search form --}}
    @include('adm_theme::layouts.partials.sidebar.menu-item-search-form')

@elseif ($sidebarItemHelper->isMenuSearch($item))

    {{-- Search menu --}}
    @include('adm_theme::layouts.partials.sidebar.menu-item-search-menu')

@elseif ($sidebarItemHelper->isSubmenu($item))

    {{-- Treeview menu --}}
    @include('adm_theme::layouts.partials.sidebar.menu-item-treeview-menu')

@elseif ($sidebarItemHelper->isLink($item))

    {{-- Link --}}
    @include('adm_theme::layouts.partials.sidebar.menu-item-link')

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 64fad46 (rebase)
=======
<<<<<<< HEAD
>>>>>>> 4a726e2 (rebase)
=======
<<<<<<< HEAD
>>>>>>> f63434d (rebase)
>>>>>>> 31d6e3b (first)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
=======
>>>>>>> 64fad46 (rebase)
@endif
=======
@endif
>>>>>>> b738e1c (rebase)
=======
@endif
>>>>>>> 63c2c43 (up)
