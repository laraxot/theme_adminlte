<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
namespace Themes\AdminLTE\Events;

use Themes\AdminLTE\Http\Controllers\DarkModeController;

<<<<<<< HEAD
class DarkModeWasToggled {
=======
class DarkModeWasToggled
{
>>>>>>> 31d6e3b (first)
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
     *
     * @param  DarkModeController  $ctrl
     */
    public function __construct(DarkModeController $ctrl)
    {
>>>>>>> 31d6e3b (first)
        $this->darkMode = $ctrl;
    }
}
