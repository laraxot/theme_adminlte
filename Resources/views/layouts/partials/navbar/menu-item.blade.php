@inject('navbarItemHelper', 'Themes\AdminLTE\Helpers\NavbarItemHelper')

@if ($navbarItemHelper->isSearch($item))
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
=======
>>>>>>> 3703261 (up)
>>>>>>> db3db5ed (rebase)
=======
>>>>>>> e5945a61 (rebase)
    {{-- Search form --}}
    @include('adm_theme::layouts.partials.navbar.menu-item-search-form')
@elseif ($navbarItemHelper->isNotification($item))
    {{-- Notification link --}}
    {{-- <x-adminlte-navbar-notification :id="$item['id']" :href="$item['href']" :icon="$item['icon']"
        :icon-color="$item['icon_color'] ?? null" :badge-label="$item['label'] ?? null"
        :badge-color="$item['label_color'] ?? null" :update-cfg="$item['update_cfg'] ?? null"
        :enable-dropdown-mode="$item['dropdown_mode'] ?? null"
        :dropdown-footer-label="$item['dropdown_flabel'] ?? null" /> --}}
@elseif ($navbarItemHelper->isFullscreen($item))
    {{-- Fullscreen toggle widget --}}
    @include('adm_theme::layouts.partials.navbar.menu-item-fullscreen-widget')
@elseif ($navbarItemHelper->isDarkmode($item))
    {{-- Darkmode toggle widget --}}
    {{-- <x-adminlte-navbar-darkmode-widget :icon-enabled="$item['icon_enabled'] ?? null"
        :color-enabled="$item['color_enabled'] ?? null" :icon-disabled="$item['icon_disabled'] ?? null"
        :color-disabled="$item['color_disabled'] ?? null" /> --}}
@elseif ($navbarItemHelper->isSubmenu($item))
    {{-- Dropdown menu --}}
    @include('adm_theme::layouts.partials.navbar.menu-item-dropdown-menu')
@elseif ($navbarItemHelper->isLink($item))
    {{-- Link --}}
    @include('adm_theme::layouts.partials.navbar.menu-item-link')
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
>>>>>>> 543f78f7 (rebase)
=======
>>>>>>> db3db5ed (rebase)
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5b4054a (.)
=======
>>>>>>> 4ab624f (rebase)
>>>>>>> 5dd3b30a (rebase)
    {{-- Search form --}}
    @include('adm_theme::layouts.partials.navbar.menu-item-search-form')
@elseif ($navbarItemHelper->isNotification($item))
    {{-- Notification link --}}
    {{-- <x-adminlte-navbar-notification :id="$item['id']" :href="$item['href']" :icon="$item['icon']"
        :icon-color="$item['icon_color'] ?? null" :badge-label="$item['label'] ?? null"
        :badge-color="$item['label_color'] ?? null" :update-cfg="$item['update_cfg'] ?? null"
        :enable-dropdown-mode="$item['dropdown_mode'] ?? null"
        :dropdown-footer-label="$item['dropdown_flabel'] ?? null" /> --}}
@elseif ($navbarItemHelper->isFullscreen($item))
    {{-- Fullscreen toggle widget --}}
    @include('adm_theme::layouts.partials.navbar.menu-item-fullscreen-widget')
@elseif ($navbarItemHelper->isDarkmode($item))
    {{-- Darkmode toggle widget --}}
    {{-- <x-adminlte-navbar-darkmode-widget :icon-enabled="$item['icon_enabled'] ?? null"
        :color-enabled="$item['color_enabled'] ?? null" :icon-disabled="$item['icon_disabled'] ?? null"
        :color-disabled="$item['color_disabled'] ?? null" /> --}}
@elseif ($navbarItemHelper->isSubmenu($item))
    {{-- Dropdown menu --}}
    @include('adm_theme::layouts.partials.navbar.menu-item-dropdown-menu')
@elseif ($navbarItemHelper->isLink($item))
    {{-- Link --}}
    @include('adm_theme::layouts.partials.navbar.menu-item-link')
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> 543f78f7 (rebase)
=======
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")

=======
>>>>>>> 5b4054a (.)
>>>>>>> 5dd3b30a (rebase)
    {{-- Search form --}}
    @include('adm_theme::layouts.partials.navbar.menu-item-search-form')
@elseif ($navbarItemHelper->isNotification($item))
    {{-- Notification link --}}
<<<<<<< HEAD
<<<<<<< HEAD
    {{--
=======
    {{--  
>>>>>>> 543f78f7 (rebase)
    <x-adminlte-navbar-notification :id="$item['id']" :href="$item['href']" :icon="$item['icon']"
=======
    {{-- <x-adminlte-navbar-notification :id="$item['id']" :href="$item['href']" :icon="$item['icon']"
>>>>>>> 5dd3b30a (rebase)
        :icon-color="$item['icon_color'] ?? null" :badge-label="$item['label'] ?? null"
        :badge-color="$item['label_color'] ?? null" :update-cfg="$item['update_cfg'] ?? null"
        :enable-dropdown-mode="$item['dropdown_mode'] ?? null"
        :dropdown-footer-label="$item['dropdown_flabel'] ?? null" /> --}}
@elseif ($navbarItemHelper->isFullscreen($item))
    {{-- Fullscreen toggle widget --}}
    @include('adm_theme::layouts.partials.navbar.menu-item-fullscreen-widget')
@elseif ($navbarItemHelper->isDarkmode($item))
    {{-- Darkmode toggle widget --}}
<<<<<<< HEAD
<<<<<<< HEAD
    {{--
=======
    {{--  
>>>>>>> 543f78f7 (rebase)
    <x-adminlte-navbar-darkmode-widget :icon-enabled="$item['icon_enabled'] ?? null"
=======
    {{-- <x-adminlte-navbar-darkmode-widget :icon-enabled="$item['icon_enabled'] ?? null"
>>>>>>> 5dd3b30a (rebase)
        :color-enabled="$item['color_enabled'] ?? null" :icon-disabled="$item['icon_disabled'] ?? null"
        :color-disabled="$item['color_disabled'] ?? null" /> --}}
@elseif ($navbarItemHelper->isSubmenu($item))
    {{-- Dropdown menu --}}
    @include('adm_theme::layouts.partials.navbar.menu-item-dropdown-menu')
@elseif ($navbarItemHelper->isLink($item))
    {{-- Link --}}
    @include('adm_theme::layouts.partials.navbar.menu-item-link')
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 64fad46 (rebase)
=======
>>>>>>> 543f78f7 (rebase)
=======
>>>>>>> 5dd3b30a (rebase)

<<<<<<< HEAD
>>>>>>> 31d6e3b (first)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
>>>>>>> 6f3ed7c3 (rebase)
=======
=======
=======
>>>>>>> 5b4054a (.)
>>>>>>> 5a3868d (rebase)
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
=======
>>>>>>> 5dd3b30a (rebase)
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
>>>>>>> b6bf7b3 (rebase)
<<<<<<< HEAD
>>>>>>> 543f78f7 (rebase)
=======
=======
=======
=======
>>>>>>> 5b4054a (.)
>>>>>>> 5a3868d (rebase)
>>>>>>> 4ab624f (rebase)
<<<<<<< HEAD
>>>>>>> 5dd3b30a (rebase)
=======
=======
>>>>>>> 3703261 (up)
>>>>>>> db3db5ed (rebase)
=======
>>>>>>> e5945a61 (rebase)
@endif
