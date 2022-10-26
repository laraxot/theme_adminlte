<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

>>>>>>> f405739 (up)
=======
declare(strict_types=1);

>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
namespace Themes\AdminLTE\Events;
=======
namespace Themes\KlekooAdm\Events;
>>>>>>> b738e1c (rebase)
=======
namespace Themes\AdminLTE\Events;
>>>>>>> 63c2c43 (up)
=======
namespace Themes\KlekooAdm\Events;
>>>>>>> 8a5cc0b (.)
=======
namespace Themes\AdminLTE\Events;
>>>>>>> 5b4054a (.)

use Themes\AdminLTE\Menu\Builder;

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
=======
class BuildingMenu {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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
=======
     */
    public function __construct(Builder $menu) {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        $this->menu = $menu;
    }
}
