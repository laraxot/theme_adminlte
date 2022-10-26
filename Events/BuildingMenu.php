<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

>>>>>>> f405739 (up)
namespace Themes\AdminLTE\Events;

use Themes\AdminLTE\Menu\Builder;

<<<<<<< HEAD
<<<<<<< HEAD
class BuildingMenu {
=======
class BuildingMenu
{
>>>>>>> 31d6e3b (first)
=======
class BuildingMenu {
>>>>>>> f405739 (up)
    /**
     * The menu builder.
     *
     * @var Builder
     */
    public $menu;

    /**
     * Create a new event instance.
<<<<<<< HEAD
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
=======
     */
    public function __construct(Builder $menu) {
>>>>>>> f405739 (up)
        $this->menu = $menu;
    }
}
