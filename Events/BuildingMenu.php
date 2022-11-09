<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
declare(strict_types=1);

>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
namespace Themes\AdminLTE\Events;

use Themes\AdminLTE\Menu\Builder;

<<<<<<< HEAD
class BuildingMenu {
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
class BuildingMenu {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
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
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
     */
    public function __construct(Builder $menu) {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
        $this->menu = $menu;
    }
}
