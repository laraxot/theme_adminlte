<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
namespace Themes\AdminLTE\Events;
=======
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
>>>>>>> 905478d (rebase)
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
<<<<<<< HEAD
>>>>>>> b6bf7b3 (rebase)
=======
=======
namespace Themes\AdminLTE\Events;
>>>>>>> 5b4054a (.)
>>>>>>> 4ab624f (rebase)
=======
namespace Themes\AdminLTE\Events;
>>>>>>> 3703261 (up)

use Themes\AdminLTE\Http\Controllers\DarkModeController;

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
