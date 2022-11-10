<?php

declare(strict_types=1);

namespace Themes\KlekooAdm\Services;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Str;
<<<<<<< HEAD
use Modules\Theme\Models\Menu;
=======
<<<<<<< HEAD
>>>>>>> 802aff9c (rebase)
use Modules\Xot\Services\PanelService;
use Modules\Xot\View\Composers\XotBaseComposer;
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\View\Composers\XotBaseComposer;
=======
>>>>>>> 31d6e3b (first)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
<<<<<<< HEAD
>>>>>>> 905478d (rebase)
=======
=======
use Themes\AdminLTE\Menu\Builder;
use Illuminate\Support\Collection;
>>>>>>> 7bb12fc (.)
>>>>>>> 7582ab0 (rebase)
>>>>>>> 802aff9c (rebase)
use Nwidart\Modules\Facades\Module;
<<<<<<< HEAD
=======
=======
>>>>>>> d79d738 (up)
use Illuminate\Contracts\Container\Container;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Support\Collection;
=======
>>>>>>> d20c4d6 (rebase)
=======
>>>>>>> f63434d (rebase)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 543f78f7 (rebase)
use Illuminate\Support\Str;
<<<<<<< HEAD
use Modules\Xot\Services\PanelService;
<<<<<<< HEAD
use Modules\Xot\View\Composers\XotBaseComposer;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\View\Composers\XotBaseComposer;
=======
>>>>>>> 31d6e3b (first)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
<<<<<<< HEAD
>>>>>>> 905478d (rebase)
=======
=======
use Themes\AdminLTE\Menu\Builder;
use Illuminate\Support\Collection;
>>>>>>> 7bb12fc (.)
>>>>>>> 7582ab0 (rebase)
use Nwidart\Modules\Facades\Module;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> dfca2a99 (rebase)
=======
>>>>>>> b6bf7b3 (rebase)
>>>>>>> 543f78f7 (rebase)
use Illuminate\Contracts\Container\Container;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Modules\Xot\Services\PanelService;
<<<<<<< HEAD
use Modules\Xot\View\Composers\XotBaseComposer;
=======
=======
use Illuminate\Support\Str;
use Themes\AdminLTE\Menu\Builder;
use Illuminate\Support\Collection;
>>>>>>> 8a5cc0b (.)
>>>>>>> b6bf7b3 (rebase)
use Nwidart\Modules\Facades\Module;
use Modules\Xot\Services\PanelService;
use Themes\AdminLTE\Events\BuildingMenu;
use Themes\AdminLTE\Helpers\LayoutHelper;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Contracts\Container\Container;
use Themes\AdminLTE\Helpers\NavbarItemHelper;
use Themes\AdminLTE\Helpers\SidebarItemHelper;
<<<<<<< HEAD
use Themes\AdminLTE\Menu\Builder;
=======
use Modules\Xot\View\Composers\XotBaseComposer;
>>>>>>> b6bf7b3 (rebase)

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
class AdminLTE extends XotBaseComposer {
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d20c4d6 (rebase)
=======
>>>>>>> f63434d (rebase)
=======
>>>>>>> 543f78f7 (rebase)
class AdminLTE extends XotBaseComposer {
=======
class AdminLTE {
>>>>>>> 31d6e3b (first)
=======
class AdminLTE {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d20c4d6 (rebase)
=======
>>>>>>> 543f78f7 (rebase)
>>>>>>> 905478d (rebase)
=======
=======
class AdminLTE extends XotBaseComposer { 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 7bb12fc (.)
<<<<<<< HEAD
>>>>>>> 7582ab0 (rebase)
<<<<<<< HEAD
>>>>>>> 802aff9c (rebase)
=======
=======
>>>>>>> 7bb12fc (.)
<<<<<<< HEAD
>>>>>>> 7582ab0 (rebase)
>>>>>>> 543f78f7 (rebase)
=======
=======
=======
use Themes\KlekooAdm\Events\BuildingMenu;
use Themes\KlekooAdm\Helpers\LayoutHelper;
use Themes\KlekooAdm\Helpers\NavbarItemHelper;
use Themes\KlekooAdm\Helpers\SidebarItemHelper;
use Themes\KlekooAdm\Menu\Builder;

class AdminLTE {
>>>>>>> e4c311e... .
>>>>>>> b738e1c (rebase)
<<<<<<< HEAD
>>>>>>> 018589a (rebase)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 312af933 (rebase)
=======
=======
>>>>>>> 543f78f7 (rebase)
=======
=======
class AdminLTE extends XotBaseComposer {
>>>>>>> 63c2c43 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 08eedf4 (rebase)
<<<<<<< HEAD
>>>>>>> 6f3ed7c3 (rebase)
=======
=======
>>>>>>> 08eedf4 (rebase)
>>>>>>> 543f78f7 (rebase)
=======
=======
class AdminLTE extends XotBaseComposer { 
>>>>>>> 8a5cc0b (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> db07ea7 (rebase)
<<<<<<< HEAD
>>>>>>> bc832b90 (rebase)
=======
=======
=======
class AdminLTE extends XotBaseComposer {
>>>>>>> 5b4054a (.)
>>>>>>> 5a3868d (rebase)
<<<<<<< HEAD
>>>>>>> 103222ea (rebase)
=======
=======
class AdminLTE extends XotBaseComposer {
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> 905478d (rebase)
>>>>>>> 64fad46 (rebase)
<<<<<<< HEAD
>>>>>>> a159d289 (rebase)
=======
=======
=======
>>>>>>> 4a726e2 (rebase)
>>>>>>> 7bb12fc (.)
<<<<<<< HEAD
>>>>>>> 7582ab0 (rebase)
<<<<<<< HEAD
>>>>>>> d20c4d6 (rebase)
<<<<<<< HEAD
>>>>>>> 06f3c31a (rebase)
=======
=======
=======
=======
=======
use Themes\KlekooAdm\Events\BuildingMenu;
use Themes\KlekooAdm\Helpers\LayoutHelper;
use Themes\KlekooAdm\Helpers\NavbarItemHelper;
use Themes\KlekooAdm\Helpers\SidebarItemHelper;
use Themes\KlekooAdm\Menu\Builder;

class AdminLTE {
>>>>>>> e4c311e... .
>>>>>>> b738e1c (rebase)
>>>>>>> 018589a (rebase)
>>>>>>> 4a726e2 (rebase)
<<<<<<< HEAD
>>>>>>> 3a1ab172 (rebase)
=======
=======
>>>>>>> 08eedf4 (rebase)
>>>>>>> f63434d (rebase)
>>>>>>> 9a582057 (rebase)
=======
class AdminLTE extends XotBaseComposer {
>>>>>>> dfca2a99 (rebase)
=======
>>>>>>> db07ea7 (rebase)
>>>>>>> b6bf7b3 (rebase)
>>>>>>> 543f78f7 (rebase)
    /**
     * The array of menu items.
     *
     * @var array
     */
    protected $menu;

    /**
     * The array of menu filters. These filters will apply on each one of the
     * menu items in order to transforms they in some way.
     *
     * @var array
     */
    protected $filters;

    /**
     * The events dispatcher.
     *
     * @var Dispatcher
     */
    protected $events;

    /**
     * The application service container.
     *
     * @var Container
     */
    protected $container;

    /**
     * Map between a valid menu filter token and his respective filter method.
     * These filters are intended to get a specific set of menu items.
     *
     * @var array
     */
    protected $menuFilterMap;

    /**
     * Constructor.
     * Unresolvable dependency resolving [Parameter #0 [ <required> array $filters ]] in class Themes\KlekooAdm\Services\AdminLTE.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(/* array $filters, */ Dispatcher $events, Container $container) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
    public function __construct(/* array $filters, */ Dispatcher $events, Container $container) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
    public function __construct(/* array $filters, */ Dispatcher $events, Container $container) {
=======
    public function __construct(/*array $filters, */ Dispatcher $events, Container $container) {
>>>>>>> 31d6e3b (first)
=======
    public function __construct(/* array $filters, */ Dispatcher $events, Container $container) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
    public function __construct(/* array $filters, */ Dispatcher $events, Container $container) {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
    public function __construct(/* array $filters, */ Dispatcher $events, Container $container) {
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
    public function __construct(/* array $filters, */ Dispatcher $events, Container $container) {
>>>>>>> dfca2a99 (rebase)
        $filters = config('adm_theme::adminlte.filters');
        $this->filters = $filters;
        $this->events = $events;
        $this->container = $container;

        // Fill the map of filters methods.

        $this->menuFilterMap = [
            'sidebar' => [$this, 'sidebarFilter'],
            'navbar-left' => [$this, 'navbarLeftFilter'],
            'navbar-right' => [$this, 'navbarRightFilter'],
            'navbar-user' => [$this, 'navbarUserMenuFilter'],
        ];
    }

    /**
     * Get all the menu items, or a specific set of these.
     *
     * @param string $filterToken Token representing a subset of the menu items
     *
     * @return array A set of menu items
     */
    public function menu($filterToken = null) {
        if (empty($this->menu)) {
            $this->menu = $this->buildMenu();
        }

        // Check for filter token.

<<<<<<< HEAD
<<<<<<< HEAD
        // backtrace(true);
        // dddx($this->menu);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
        // backtrace(true);
        // dddx($this->menu);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
        // backtrace(true);
        // dddx($this->menu);
=======
        //backtrace(true);
        //dddx($this->menu);
>>>>>>> 31d6e3b (first)
=======
        // backtrace(true);
        // dddx($this->menu);
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
        // backtrace(true);
        // dddx($this->menu);
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
        // backtrace(true);
        // dddx($this->menu);
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
        // backtrace(true);
        // dddx($this->menu);
>>>>>>> dfca2a99 (rebase)

        if (isset($this->menuFilterMap[$filterToken])) {
            return array_filter(
                $this->menu,
                $this->menuFilterMap[$filterToken]
            );
        }

        // No filter token provided, return the complete menu.

        return $this->menu;
    }

    /**
     * Build the menu.
     *
     * @return array The set of menu items
     */
    protected function buildMenu() {
        // Create the menu builder instance.

        $builder = new Builder($this->buildFilters());

        // Dispatch the BuildingMenu event. Listeners of this event will fill
        // the menu.

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
<<<<<<< HEAD
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
>>>>>>> dfca2a99 (rebase)
        // $this->events->dispatch(new BuildingMenu($builder));
        $menu = config('adm_theme::adminlte.menu'); // questo può servire per le voci sopra i aree/modelli??

        // $builder->add(...$menu);

        $model_menu = $this->setMenu();

        // Cannot unpack array with string keys
        // dddx(['menu' => $menu, 'modelmenu' => $modelmenu]);

        $builder->add(...$model_menu);
        // dddx($builder->menu);
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
=======
=======
>>>>>>> 905478d (rebase)
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
        //$this->events->dispatch(new BuildingMenu($builder));
        $menu = config('adm_theme::adminlte.menu'); //questo può servire per le voci sopra i aree/modelli??
=======
        // $this->events->dispatch(new BuildingMenu($builder));
        $menu = config('adm_theme::adminlte.menu'); // questo può servire per le voci sopra i aree/modelli??
>>>>>>> f405739 (up)

        // $builder->add(...$menu);

        $model_menu = $this->setMenu();

        // Cannot unpack array with string keys
        // dddx(['menu' => $menu, 'modelmenu' => $modelmenu]);

        $builder->add(...$model_menu);
<<<<<<< HEAD
        //dddx($builder->menu);
>>>>>>> 31d6e3b (first)
=======
        // dddx($builder->menu);
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
>>>>>>> dfca2a99 (rebase)

        // Return the set of menu items.

        return $builder->menu;
    }

    public function getMenuItemsByName(string $name): array {
        $menu = Menu::firstWhere('name', $name);
        if (null === $menu) {
            return []; // collect([]);
        }
        $rows = collect($menu->items)->map(function ($item) {
            return [
                'text' => $item->label,
                'icon' => '',
                'url' => $item->link,
            ];
        });

        return $rows->all();
    }

    protected function setMenu(): array {
        $parameters = optional(\Route::current())->parameters();

        if (isset($parameters['module'])) {
            $model_menu = getModuleModelsMenu($parameters['module'])->map(function ($item) {
                $out = get_object_vars($item);
                $out['text'] = $item->title;

                return $out;
            })
            ->values()
            ->all();

            $module_menu = $this->getMenuItemsByName('module_'.$parameters['module']);

            $model_menu = [
                [
                    'url' => '/admin/'.$parameters['module'],
                    'text' => Str::upper($parameters['module']),
                    'icon' => 'fab fa-buromobelexperte',
                ],
                [
                    'text' => 'Menu',
                    'icon' => 'fas fa-fw fa-share',
                    'submenu' => $module_menu,
                ],
                [
                    'text' => 'MODELS',
                    'icon' => 'fas fa-database',
                    'submenu' => $model_menu,
                ],
                /*
            [
                    'text' => 'Dashboard',
                    'icon' => 'fas fa-fw fa-share',
                    'submenu' => $model_menu,
            ],
            [
                    'text' => 'Catalog',
                    'icon' => 'fas fa-fw fa-share',
                    'submenu' => $model_menu,
            ],
            [
                    'text' => 'Brands',
                    'icon' => 'fas fa-fw fa-share',
                    'submenu' => $model_menu,
            ],
            [
                    'text' => 'Categories',
                    'icon' => 'fas fa-fw fa-share',
                    'submenu' => $model_menu,
            ],
            [
                    'text' => 'Collections',
                    'icon' => 'fas fa-fw fa-share',
                    'submenu' => $model_menu,
            ],
            [
                    'text' => 'Custumers',
                    'icon' => 'fas fa-fw fa-share',
                    'submenu' => $model_menu,
            ],
            [
                    'text' => 'Reviews',
                    'icon' => 'fas fa-fw fa-share',
                    'submenu' => $model_menu,
            ],
            [
                    'text' => 'Discounts',
                    'icon' => 'fas fa-fw fa-share',
                    'submenu' => $model_menu,
            ],
            */
            ];
        //  ->all();
        // dddx($model_menu);
        } else {
            $modules = array_keys(Module::all());
            $panel = PanelService::make()->get(\Auth::user());
            $model_menu = $panel->areas()
                ->filter(
                    function ($item) use ($modules) {
                        return \in_array($item->area_define_name, $modules, true);
                    }
                )
                ->map(
                    function ($item) {
                        $out = get_object_vars($item);
                        $out['text'] = $item->area_define_name;
                        $out['url'] = $item->url;
                        $out['active'] = $item->active;
                        $out['title'] = $item->area_define_name;

                        return $out;
                    }
                )
            ->values()
            ->all();

            $model_menu = [
                [
                    'text' => 'AREAS',
                    'icon' => 'fas fa-fw fa-share',
                    'submenu' => $model_menu,
                ],
            ];
        }

        /*
        $model_menu = getModuleModelsMenu('lu')->map(function ($item) {
                $out = get_object_vars($item);
                $out['text'] = $item->title;

                return $out;
            })
            ->values()
            ->all();
        */

        return $model_menu;
    }

    /**
     * Build the menu filters.
     *
     * @return array The set of filters that will apply on each menu item
     */
    protected function buildFilters() {
        return array_map([$this->container, 'make'], $this->filters);
    }

    /**
     * Filter method used to get the sidebar menu items.
     *
     * @param mixed $item A menu item
     *
     * @return bool
     */
    private function sidebarFilter($item) {
        return SidebarItemHelper::isValidItem($item);
    }

    /**
     * Filter method used to get the top navbar left menu items.
     *
     * @param mixed $item A menu item
     *
     * @return bool
     */
    private function navbarLeftFilter($item) {
        if (LayoutHelper::isLayoutTopnavEnabled() && SidebarItemHelper::isValidItem($item)) {
            return NavbarItemHelper::isAcceptedItem($item);
        }

        return NavbarItemHelper::isValidLeftItem($item);
    }

    /**
     * Filter method used to get the top navbar right menu items.
     *
     * @param mixed $item A menu item
     *
     * @return bool
     */
    private function navbarRightFilter($item) {
        return NavbarItemHelper::isValidRightItem($item);
    }

    /**
     * Filter method used to get the navbar user menu items.
     *
     * @param mixed $item A menu item
     *
     * @return bool
     */
    private function navbarUserMenuFilter($item) {
        return NavbarItemHelper::isValidUserMenuItem($item);
    }

    public function url(...$args) {
        return 'wip['.__LINE__.']['.__FILE__.']';
    }

<<<<<<< HEAD
    // public function getMenuItemsByName(string $name): Collection {
    //     return collect([]);
    // }
=======
    public function getMenuItemsByName(string $name): Collection {
        return collect([]);
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
>>>>>>> 655502de (rebase)
}
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
=======
>>>>>>> d20c4d6 (rebase)
=======
>>>>>>> f63434d (rebase)
=======
>>>>>>> 543f78f7 (rebase)
}
=======
}
>>>>>>> 31d6e3b (first)
=======
}
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
=======
>>>>>>> 543f78f7 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
}
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d20c4d6 (rebase)
=======
>>>>>>> 543f78f7 (rebase)
>>>>>>> 905478d (rebase)
=======
=======
}
>>>>>>> 7bb12fc (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f63434d (rebase)
>>>>>>> 7582ab0 (rebase)
<<<<<<< HEAD
>>>>>>> 802aff9c (rebase)
=======
=======
>>>>>>> 7582ab0 (rebase)
>>>>>>> 543f78f7 (rebase)
=======
=======
}
>>>>>>> 63c2c43 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 08eedf4 (rebase)
<<<<<<< HEAD
>>>>>>> 6f3ed7c3 (rebase)
=======
=======
>>>>>>> 08eedf4 (rebase)
>>>>>>> 543f78f7 (rebase)
=======
=======
}
>>>>>>> 8a5cc0b (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> db07ea7 (rebase)
<<<<<<< HEAD
>>>>>>> bc832b90 (rebase)
=======
=======
=======
}
>>>>>>> 5b4054a (.)
>>>>>>> 5a3868d (rebase)
<<<<<<< HEAD
>>>>>>> 103222ea (rebase)
=======
=======
}
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
>>>>>>> 905478d (rebase)
>>>>>>> 64fad46 (rebase)
<<<<<<< HEAD
>>>>>>> a159d289 (rebase)
=======
=======
>>>>>>> 7582ab0 (rebase)
>>>>>>> d20c4d6 (rebase)
<<<<<<< HEAD
>>>>>>> 06f3c31a (rebase)
=======
=======
>>>>>>> 08eedf4 (rebase)
>>>>>>> f63434d (rebase)
>>>>>>> 9a582057 (rebase)
=======
}
>>>>>>> dfca2a99 (rebase)
=======
>>>>>>> db07ea7 (rebase)
>>>>>>> b6bf7b3 (rebase)
>>>>>>> 543f78f7 (rebase)
