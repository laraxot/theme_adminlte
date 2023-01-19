<?php

declare(strict_types=1);

namespace Themes\AdminLTE\Events;

use Themes\AdminLTE\Menu\Builder;

class BuildingMenu {
    /**
     * The menu builder.
     *
     * @var Builder
     */
    public $menu;

    /**
     * Create a new event instance.
     */
    public function __construct(Builder $menu) {
        $this->menu = $menu;
    }
}
