@inject('navbarItemHelper', 'Themes\AdminLTE\Helpers\NavbarItemHelper')

@if ($navbarItemHelper->isSearch($item))
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 64fad46 (rebase)
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")

<<<<<<< HEAD
=======
>>>>>>> 5b4054a (.)
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
    {{-- Search form --}}
    @include('adm_theme::layouts.partials.navbar.menu-item-search-form')

@elseif ($navbarItemHelper->isNotification($item))

    {{-- Notification link --}}
    {{--  
    <x-adminlte-navbar-notification :id="$item['id']" :href="$item['href']" :icon="$item['icon']"
        :icon-color="$item['icon_color'] ?? null" :badge-label="$item['label'] ?? null"
        :badge-color="$item['label_color'] ?? null" :update-cfg="$item['update_cfg'] ?? null"
        :enable-dropdown-mode="$item['dropdown_mode'] ?? null"
        :dropdown-footer-label="$item['dropdown_flabel'] ?? null" />
    --}}

@elseif ($navbarItemHelper->isFullscreen($item))

    {{-- Fullscreen toggle widget --}}
    @include('adm_theme::layouts.partials.navbar.menu-item-fullscreen-widget')

@elseif ($navbarItemHelper->isDarkmode($item))

    {{-- Darkmode toggle widget --}}
    {{--  
    <x-adminlte-navbar-darkmode-widget :icon-enabled="$item['icon_enabled'] ?? null"
        :color-enabled="$item['color_enabled'] ?? null" :icon-disabled="$item['icon_disabled'] ?? null"
        :color-disabled="$item['color_disabled'] ?? null" />
    --}}

@elseif ($navbarItemHelper->isSubmenu($item))

    {{-- Dropdown menu --}}
    @include('adm_theme::layouts.partials.navbar.menu-item-dropdown-menu')

@elseif ($navbarItemHelper->isLink($item))

    {{-- Link --}}
    @include('adm_theme::layouts.partials.navbar.menu-item-link')
>>>>>>> 64fad46 (rebase)

<<<<<<< HEAD
>>>>>>> 31d6e3b (first)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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
@endif
