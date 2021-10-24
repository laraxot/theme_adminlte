<?php

declare(strict_types=1);

namespace Themes\AdminLTE\Services;

use Illuminate\Contracts\Container\Container;
use Illuminate\Contracts\Events\Dispatcher;
use Modules\Xot\Services\PanelService;
use Themes\AdminLTE\Events\BuildingMenu;
use Themes\AdminLTE\Helpers\LayoutHelper;
use Themes\AdminLTE\Helpers\NavbarItemHelper;
use Themes\AdminLTE\Helpers\SidebarItemHelper;
use Themes\AdminLTE\Menu\Builder;

class AdminLTE {
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
    public function __construct(/*array $filters, */ Dispatcher $events, Container $container) {
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

        //$this->events->dispatch(new BuildingMenu($builder));
        $menu = config('adm_theme::adminlte.menu'); //questo può servire per le voci sopra i aree/modelli??

        //$builder->add(...$menu);

        $model_menu = $this->setMenu();

        //Cannot unpack array with string keys
        //dddx(['menu' => $menu, 'modelmenu' => $modelmenu]);

        $builder->add(...$model_menu);
        //dddx($builder->menu);

        // Return the set of menu items.

        return $builder->menu;
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

            $model_menu = [
                [
                    'text' => 'MODELS',
                    'icon' => 'fas fa-fw fa-share',
                    'submenu' => $model_menu,
                ],
            ];
        } else {
            $panel = PanelService::get(\Auth::user());
            $model_menu = $panel->areas()->map(function ($item) {
                $out = get_object_vars($item);
                $out['text'] = $item->area_define_name;
                $out['url'] = $item->url;
                $out['active'] = $item->active;
                $out['title'] = $item->area_define_name;

                return $out;
            })
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
}
