<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
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
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
declare(strict_types=1);

>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
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

use Themes\AdminLTE\Http\Controllers\DarkModeController;

<<<<<<< HEAD
class DarkModeWasToggled {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
class DarkModeWasToggled {
=======
class DarkModeWasToggled
{
>>>>>>> 31d6e3b (first)
=======
class DarkModeWasToggled {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
class DarkModeWasToggled {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
    /**
     * An instance of the dark mode controller.
     *
     * @var DarkModeController
     */
    public $darkMode;

    /**
     * Create a new event instance.
<<<<<<< HEAD
     */
    public function __construct(DarkModeController $ctrl) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function __construct(DarkModeController $ctrl) {
=======
     *
     * @param  DarkModeController  $ctrl
     */
    public function __construct(DarkModeController $ctrl)
    {
>>>>>>> 31d6e3b (first)
=======
     */
    public function __construct(DarkModeController $ctrl) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
     */
    public function __construct(DarkModeController $ctrl) {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
        $this->darkMode = $ctrl;
    }
}
