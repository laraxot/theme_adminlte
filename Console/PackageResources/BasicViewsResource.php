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
>>>>>>> cf4e5c1 (rebase)
namespace Themes\AdminLTE\Console\PackageResources;
=======
namespace Themes\KlekooAdm\Console\PackageResources;
>>>>>>> b738e1c (rebase)

use Themes\KlekooAdm\Helpers\CommandHelper;

class BasicViewsResource extends PackageResource {
    /**
     * Array with the replacement content of the basic views.
     *
     * @var array
     */
    protected $basicViewsContent = [
        'home.blade.php' => 'home.stub',
    ];

    /**
     * Create a new resource instance.
     *
     * @return void
     */
    public function __construct() {
        // Fill the resource data.

        $this->description = 'The default package basic views';
        $this->source = $this->basicViewsContent;
        $this->target = CommandHelper::getViewPath();
        $this->required = false;

        // Fill the set of installation messages.

        $this->messages = [
            'install' => 'Install the AdminLTE basic views?',
            'overwrite' => 'The basic views already exists. Want to replace the views?',
            'success' => 'Basic views installed successfully.',
        ];
    }

    /**
     * Install/Export the resource.
     *
     * @return void
     */
    public function install() {
        // Install the basic views. We going to replace the content of any
        // existing basic view.

        foreach ($this->source as $file => $stub) {
            $target = $this->target.\DIRECTORY_SEPARATOR.$file;
            CommandHelper::ensureDirectoryExists(\dirname($target));
            copy(CommandHelper::getStubPath($stub), $target);
        }
    }

    /**
     * Uninstall/Remove the resource.
     *
     * @return void
     */
    public function uninstall() {
        // Remove the package basic views.

        foreach ($this->source as $file => $tub) {
            $target = $this->target.\DIRECTORY_SEPARATOR.$file;

            if (is_file($target)) {
                unlink($target);
            }
        }
    }

    /**
     * Check if the resource already exists on the target destination.
     *
     * @return bool
     */
    public function exists() {
        // Check if any of the basic views already exists.

        foreach ($this->source as $file => $stub) {
            $target = $this->target.\DIRECTORY_SEPARATOR.$file;

            if (is_file($target)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Check if the resource is correctly installed.
     *
     * @return bool
     */
    public function installed() {
        foreach ($this->source as $file => $stub) {
            $target = $this->target.\DIRECTORY_SEPARATOR.$file;
            $content = file_get_contents(CommandHelper::getStubPath($stub));

            if (! $this->basicViewInstalled($target, $content)) {
                return false;
            }
        }

        return true;
    }

    /**
     * Check if a basic view is correctly installed.
     *
     * @param string $path    Absolute path of the view
     * @param string $content The expected content of the view
     *
     * @return bool
     */
    protected function basicViewInstalled($path, $content) {
        return is_file($path) && (file_get_contents($path) === $content);
    }
}
