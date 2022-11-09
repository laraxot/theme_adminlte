@inject('sidebarItemHelper', 'Themes\AdminLTE\Helpers\SidebarItemHelper')

@if ($sidebarItemHelper->isHeader($item))
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 905478d7 (rebase)
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
=======
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")

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
>>>>>>> 31d6e3b (first)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
@endif
