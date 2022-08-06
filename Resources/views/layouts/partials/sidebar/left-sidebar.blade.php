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
                data-widget="treeview" role="menu"
                @if (config('adm_theme::adminlte.sidebar_nav_animation_speed') != 300)
                    data-animation-speed="{{ config('adm_theme::adminlte.sidebar_nav_animation_speed') }}"
                @endif
                @if (!config('adm_theme::adminlte.sidebar_nav_accordion'))
                    data-accordion="false"
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
                {{-- Configured sidebar links --}}
                {{-- dddx($adminlte->menu('sidebar')) --}}
            </ul>
        </nav>
    </div>
</aside>