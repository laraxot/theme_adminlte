<?php

declare(strict_types=1);

<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

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
>>>>>>> 312af933 (rebase)
namespace Themes\AdminLTE\Console\PackageResources;
=======
namespace Themes\KlekooAdm\Console\PackageResources;
>>>>>>> b738e1c (rebase)
=======
namespace Themes\AdminLTE\Console\PackageResources;
>>>>>>> 63c2c43 (up)
=======
namespace Themes\KlekooAdm\Console\PackageResources;
>>>>>>> 8a5cc0b (.)

use Themes\KlekooAdm\Helpers\CommandHelper;

class MainViewsResource extends PackageResource {
    /**
     * Create a new resource instance.
     *
     * @return void
     */
    public function __construct() {
        // Fill the resource data.

        $this->description = 'The default package main views';
        $this->source = CommandHelper::getPackagePath('resources/views');
        $this->target = CommandHelper::getViewPath('vendor/adminlte');
        $this->required = false;

        // Fill the set of installation messages.

        $this->messages = [
            'install' => 'Install the AdminLTE main views?',
            'overwrite' => 'The main views already exists. Want to replace the views?',
            'success' => 'Main views installed successfully.',
        ];
    }

    /**
     * Install/Export the resource.
     *
     * @return void
     */
    public function install() {
        // Install the main views.

        CommandHelper::copyDirectory($this->source, $this->target, true, true);
    }

    /**
     * Uninstall/Remove the resource.
     *
     * @return void
     */
    public function uninstall() {
        // Uninstall the package main views.

        if (is_dir($this->target)) {
            CommandHelper::removeDirectory($this->target);
        }
    }

    /**
     * Check if the resource already exists on the target destination.
     *
     * @return bool
     */
    public function exists() {
        return is_dir($this->target);
    }

    /**
     * Check if the resource is correctly installed.
     *
     * @return bool
     */
    public function installed() {
        return (bool) CommandHelper::compareDirectories(
            $this->source,
            $this->target,
            true
        );
    }
}
