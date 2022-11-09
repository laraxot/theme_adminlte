<aside class="main-sidebar {{ config('adm_theme::adminlte.classes_sidebar', 'sidebar-dark-primary elevation-4') }}">

    {{-- Sidebar brand logo --}}
    @if (config('adm_theme::adminlte.logo_img_xl'))
        @include('adm_theme::layouts.partials.common.brand-logo-xl')
    @else
        @include('adm_theme::layouts.partials.common.brand-logo-xs')
    @endif


    {{-- Sidebar menu --}}
    <div class="sidebar">
        <nav class="pt-2">
            <ul class="nav nav-pills nav-sidebar flex-column {{ config('adm_theme::adminlte.classes_sidebar_nav', '') }}"
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> cf3e396 (rebase)
                data-widget="treeview" role="menu"
                @if (config('adm_theme::adminlte.sidebar_nav_animation_speed') != 300) data-animation-speed="{{ config('adm_theme::adminlte.sidebar_nav_animation_speed') }}" @endif
                @if (!config('adm_theme::adminlte.sidebar_nav_accordion')) data-accordion="false" @endif>
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                data-widget="treeview" role="menu"
                @if (config('adm_theme::adminlte.sidebar_nav_animation_speed') != 300) data-animation-speed="{{ config('adm_theme::adminlte.sidebar_nav_animation_speed') }}" @endif
                @if (!config('adm_theme::adminlte.sidebar_nav_accordion')) data-accordion="false" @endif>
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
                data-widget="treeview" role="menu" @if (config('adm_theme::adminlte.sidebar_nav_animation_speed') != 300)
                data-animation-speed="{{ config('adm_theme::adminlte.sidebar_nav_animation_speed') }}"
                @endif
                @if (!config('adm_theme::adminlte.sidebar_nav_accordion'))
                    data-accordion="false"
                @endif>
<<<<<<< HEAD
>>>>>>> 31d6e3b (first)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
<<<<<<< HEAD
>>>>>>> 905478d (rebase)
=======
=======
                data-widget="treeview" role="menu"
<<<<<<< HEAD
                @if (config('adm_theme::adminlte.sidebar_nav_animation_speed') != 300)
                    data-animation-speed="{{ config('adm_theme::adminlte.sidebar_nav_animation_speed') }}"
                @endif
                @if (!config('adm_theme::adminlte.sidebar_nav_accordion'))
                    data-accordion="false"
=======
                data-widget="treeview" role="menu"
                @if (config('adm_theme::adminlte.sidebar_nav_animation_speed') != 300)
                    data-animation-speed="{{ config('adm_theme::adminlte.sidebar_nav_animation_speed') }}"
                @endif
                @if (!config('adm_theme::adminlte.sidebar_nav_accordion'))
                    data-accordion="false"
>>>>>>> 8a5cc0b (.)
                @endif
                >
                <?php
                $root = URL::to('/');
                $url = Request::url();
                $path = str_replace($root, "", $url);

                if ($path == "/admin") {
                    $surveys = $customer->surveyPdfs->all();

                    foreach ($surveys as $survey) {
                        $date = new DateTime($survey->created_at);
                        $date = $date->format('d/m/y H:i');
                        ?>
                        <li class="nav-item">
                            <a class="nav-link<?=($sid == $survey->survey_id) ? " active" : ""; ?>" href="<?=$root; ?>/admin?sid=<?=$survey->survey_id; ?>">
                                <i class="fa fa-poll"></i>
                                <p><?=$survey->survey_id . " (" . $date . ")"; ?></p>
                            </a>
                        </li>
                        <?php
                    }

                } else {
                    ?>
                    @each('adm_theme::layouts.partials.sidebar.menu-item', $adminlte->menu('sidebar'), 'item')
                    <?php
                }
                ?>
<<<<<<< HEAD
>>>>>>> b738e1c (rebase)
<<<<<<< HEAD
>>>>>>> 018589a (rebase)
<<<<<<< HEAD
>>>>>>> cf4e5c1 (rebase)
=======
=======
=======
                data-widget="treeview" role="menu" @if (config('adm_theme::adminlte.sidebar_nav_animation_speed') != 300)
                data-animation-speed="{{ config('adm_theme::adminlte.sidebar_nav_animation_speed') }}"
                @endif
                @if (!config('adm_theme::adminlte.sidebar_nav_accordion'))
                    data-accordion="false"
                @endif>
>>>>>>> 63c2c43 (up)
<<<<<<< HEAD
>>>>>>> 08eedf4 (rebase)
<<<<<<< HEAD
>>>>>>> 158b642 (rebase)
=======
=======
=======
>>>>>>> 8a5cc0b (.)
<<<<<<< HEAD
>>>>>>> db07ea7 (rebase)
<<<<<<< HEAD
>>>>>>> 3343d3d (rebase)
=======
=======
=======
                @if (config('adm_theme::adminlte.sidebar_nav_animation_speed') != 300) data-animation-speed="{{ config('adm_theme::adminlte.sidebar_nav_animation_speed') }}" @endif
                @if (!config('adm_theme::adminlte.sidebar_nav_accordion')) data-accordion="false" @endif>
>>>>>>> 5b4054a (.)
>>>>>>> 5a3868d (rebase)
<<<<<<< HEAD
>>>>>>> 2b9484e (rebase)
=======
=======
                data-widget="treeview" role="menu"
                @if (config('adm_theme::adminlte.sidebar_nav_animation_speed') != 300) data-animation-speed="{{ config('adm_theme::adminlte.sidebar_nav_animation_speed') }}" @endif
                @if (!config('adm_theme::adminlte.sidebar_nav_accordion')) data-accordion="false" @endif>
>>>>>>> d79d738 (up)
>>>>>>> cf3e396 (rebase)
                {{-- Configured sidebar links --}}
                {{-- dddx($adminlte->menu('sidebar')) --}}
                @each('adm_theme::layouts.partials.sidebar.menu-item', $adminlte->menu('sidebar'), 'item')
            </ul>
        </nav>
    </div>

</aside>
