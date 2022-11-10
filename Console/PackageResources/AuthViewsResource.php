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

class AuthViewsResource extends PackageResource {
    /**
     * Array with the replacement content of the authentication views.
     *
     * @var array
     */
    protected $authViewsContent = [
        'login.blade.php' => '@extends(\'adminlte::auth.login\')',
        'register.blade.php' => '@extends(\'adminlte::auth.register\')',
        'verify.blade.php' => '@extends(\'adminlte::auth.verify\')',
        'passwords/confirm.blade.php' => '@extends(\'adminlte::auth.passwords.confirm\')',
        'passwords/email.blade.php' => '@extends(\'adminlte::auth.passwords.email\')',
        'passwords/reset.blade.php' => '@extends(\'adminlte::auth.passwords.reset\')',
    ];

    /**
     * Create a new resource instance.
     *
     * @return void
     */
    public function __construct() {
        // Fill the resource data.

        $this->description = 'The default package authentication views';
        $this->source = $this->authViewsContent;
        $this->target = CommandHelper::getViewPath('auth');
        $this->required = false;

        // Fill the set of installation messages.

        $this->messages = [
            'install' => 'Install the AdminLTE authentication views?',
            'overwrite' => 'The authentication views already exists. Want to replace the views?',
            'success' => 'Authentication views installed successfully.',
        ];
    }

    /**
     * Install/Export the resource.
     *
     * @return void
     */
    public function install() {
        // Install the authentication views. We going to replace the content
        // of any existing authentication view.

        foreach ($this->source as $file => $content) {
            $target = $this->target.\DIRECTORY_SEPARATOR.$file;
            CommandHelper::ensureDirectoryExists(\dirname($target));
            file_put_contents($target, $content);
        }
    }

    /**
     * Uninstall/Remove the resource.
     *
     * @return void
     */
    public function uninstall() {
        // Remove the package authentication views.

        foreach ($this->source as $file => $content) {
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
        // Check if any of the authentication views already exists.

        foreach ($this->source as $file => $content) {
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
        foreach ($this->source as $file => $content) {
            $target = $this->target.\DIRECTORY_SEPARATOR.$file;

            if (! $this->authViewInstalled($target, $content)) {
                return false;
            }
        }

        return true;
    }

    /**
     * Check if an authentication view is correctly installed.
     *
     * @param string $path    Absolute path of the authentication view
     * @param string $content The expected content of the view
     *
     * @return bool
     */
    protected function authViewInstalled($path, $content) {
        return is_file($path) && (file_get_contents($path) === $content);
    }
}
