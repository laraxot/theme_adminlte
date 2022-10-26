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

use Themes\AdminLTE\Http\Controllers\DarkModeController;

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
    /**
     * An instance of the dark mode controller.
     *
     * @var DarkModeController
     */
    public $darkMode;

    /**
     * Create a new event instance.
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
        $this->darkMode = $ctrl;
    }
}
