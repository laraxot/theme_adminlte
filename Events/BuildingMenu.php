<?php

declare(strict_types=1);

namespace Themes\KlekooAdm\Events;

use Themes\KlekooAdm\Menu\Builder;

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
