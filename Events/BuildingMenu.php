<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

>>>>>>> f405739 (up)
>>>>>>> f617437 (rebase)
namespace Themes\AdminLTE\Events;

use Themes\AdminLTE\Menu\Builder;

<<<<<<< HEAD
class BuildingMenu {
=======
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
>>>>>>> f617437 (rebase)
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
>>>>>>> f617437 (rebase)
        $this->menu = $menu;
    }
}
