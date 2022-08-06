<?php

declare(strict_types=1);

namespace Themes\KlekooAdm\Events;

use Themes\KlekooAdm\Http\Controllers\DarkModeController;

class ReadingDarkModePreference {
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
