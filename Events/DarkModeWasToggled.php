<?php

declare(strict_types=1);

namespace Themes\AdminLTE\Events;

use Themes\AdminLTE\Http\Controllers\DarkModeController;

class DarkModeWasToggled {
    /**
     * An instance of the dark mode controller.
     *
     * @var DarkModeController
     */
    public $darkMode;

    /**
     * Create a new event instance.
     */
    public function __construct(DarkModeController $ctrl) {
        $this->darkMode = $ctrl;
    }
}
