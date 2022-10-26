@inject('sidebarItemHelper', 'Themes\AdminLTE\Helpers\SidebarItemHelper')

@if ($sidebarItemHelper->isHeader($item))
<<<<<<< HEAD
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

>>>>>>> 31d6e3b (first)
@endif
