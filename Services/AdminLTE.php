<?php

declare(strict_types=1);

namespace Themes\AdminLTE\Services;

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
use Modules\Xot\Services\PanelService;
use Themes\AdminLTE\Events\BuildingMenu;
use Themes\AdminLTE\Helpers\LayoutHelper;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Contracts\Container\Container;
use Themes\AdminLTE\Helpers\NavbarItemHelper;
use Themes\AdminLTE\Helpers\SidebarItemHelper;
use Modules\Xot\View\Composers\XotBaseComposer;

class AdminLTE extends XotBaseComposer {
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
class AdminLTE extends XotBaseComposer {
=======
class AdminLTE {
>>>>>>> 31d6e3b (first)
=======
class AdminLTE {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
<<<<<<< HEAD
>>>>>>> 905478d (rebase)
=======
=======
class AdminLTE extends XotBaseComposer { 
>>>>>>> 7bb12fc (.)
>>>>>>> 7582ab0 (rebase)
>>>>>>> 802aff9c (rebase)
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
     * Unresolvable dependency resolving [Parameter #0 [ <required> array $filters ]] in class Themes\AdminLTE\Services\AdminLTE.
     */
    public function __construct(/* array $filters, */ Dispatcher $events, Container $container) {
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

        // backtrace(true);
        // dddx($this->menu);

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

        // $this->events->dispatch(new BuildingMenu($builder));
        $menu = config('adm_theme::adminlte.menu'); // questo può servire per le voci sopra i aree/modelli??

        // $builder->add(...$menu);

        $model_menu = $this->setMenu();

        // Cannot unpack array with string keys
        // dddx(['menu' => $menu, 'modelmenu' => $modelmenu]);

        $builder->add(...$model_menu);
        // dddx($builder->menu);

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

    // public function getMenuItemsByName(string $name): Collection {
    //     return collect([]);
    // }
}
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
}
>>>>>>> 31d6e3b (first)
=======
}
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
}
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
<<<<<<< HEAD
>>>>>>> 905478d (rebase)
=======
=======
}
>>>>>>> 7bb12fc (.)
>>>>>>> 7582ab0 (rebase)
>>>>>>> 802aff9c (rebase)
