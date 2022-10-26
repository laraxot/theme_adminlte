<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
namespace Themes\AdminLTE\Events;

use Themes\AdminLTE\Menu\Builder;

<<<<<<< HEAD
class BuildingMenu {
=======
class BuildingMenu
{
>>>>>>> 31d6e3b (first)
    /**
     * The menu builder.
     *
     * @var Builder
     */
    public $menu;

    /**
     * Create a new event instance.
<<<<<<< HEAD
     */
    public function __construct(Builder $menu) {
=======
     *
     * @param  Builder  $menu
     */
    public function __construct(Builder $menu)
    {
>>>>>>> 31d6e3b (first)
        $this->menu = $menu;
    }
}
