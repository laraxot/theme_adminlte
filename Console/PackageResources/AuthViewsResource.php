<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

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
namespace Themes\AdminLTE\Console\PackageResources;

use Themes\AdminLTE\Helpers\CommandHelper;

<<<<<<< HEAD
class AuthViewsResource extends PackageResource {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
class AuthViewsResource extends PackageResource {
=======
class AuthViewsResource extends PackageResource
{
>>>>>>> 31d6e3b (first)
=======
class AuthViewsResource extends PackageResource {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
class AuthViewsResource extends PackageResource {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
    /**
     * Array with the replacement content of the authentication views.
     *
     * @var array
     */
    protected $authViewsContent = [
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
        'login.blade.php' => '@extends(\'adminlte::auth.login\')',
        'register.blade.php' => '@extends(\'adminlte::auth.register\')',
        'verify.blade.php' => '@extends(\'adminlte::auth.verify\')',
        'passwords/confirm.blade.php' => '@extends(\'adminlte::auth.passwords.confirm\')',
        'passwords/email.blade.php' => '@extends(\'adminlte::auth.passwords.email\')',
        'passwords/reset.blade.php' => '@extends(\'adminlte::auth.passwords.reset\')',
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 905478d (rebase)
=======
        'login.blade.php'             => '@extends(\'adminlte::auth.login\')',
        'register.blade.php'          => '@extends(\'adminlte::auth.register\')',
        'verify.blade.php'            => '@extends(\'adminlte::auth.verify\')',
        'passwords/confirm.blade.php' => '@extends(\'adminlte::auth.passwords.confirm\')',
        'passwords/email.blade.php'   => '@extends(\'adminlte::auth.passwords.email\')',
        'passwords/reset.blade.php'   => '@extends(\'adminlte::auth.passwords.reset\')',
>>>>>>> 31d6e3b (first)
=======
        'login.blade.php' => '@extends(\'adminlte::auth.login\')',
        'register.blade.php' => '@extends(\'adminlte::auth.register\')',
        'verify.blade.php' => '@extends(\'adminlte::auth.verify\')',
        'passwords/confirm.blade.php' => '@extends(\'adminlte::auth.passwords.confirm\')',
        'passwords/email.blade.php' => '@extends(\'adminlte::auth.passwords.email\')',
        'passwords/reset.blade.php' => '@extends(\'adminlte::auth.passwords.reset\')',
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
    ];

    /**
     * Create a new resource instance.
     *
     * @return void
     */
<<<<<<< HEAD
    public function __construct() {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct() {
=======
    public function __construct()
    {
>>>>>>> 31d6e3b (first)
=======
    public function __construct() {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
    public function __construct() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
        // Fill the resource data.

        $this->description = 'The default package authentication views';
        $this->source = $this->authViewsContent;
        $this->target = CommandHelper::getViewPath('auth');
        $this->required = false;

        // Fill the set of installation messages.

        $this->messages = [
<<<<<<< HEAD
            'install' => 'Install the AdminLTE authentication views?',
            'overwrite' => 'The authentication views already exists. Want to replace the views?',
            'success' => 'Authentication views installed successfully.',
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'install' => 'Install the AdminLTE authentication views?',
            'overwrite' => 'The authentication views already exists. Want to replace the views?',
            'success' => 'Authentication views installed successfully.',
=======
            'install'   => 'Install the AdminLTE authentication views?',
            'overwrite' => 'The authentication views already exists. Want to replace the views?',
            'success'   => 'Authentication views installed successfully.',
>>>>>>> 31d6e3b (first)
=======
            'install' => 'Install the AdminLTE authentication views?',
            'overwrite' => 'The authentication views already exists. Want to replace the views?',
            'success' => 'Authentication views installed successfully.',
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
            'install' => 'Install the AdminLTE authentication views?',
            'overwrite' => 'The authentication views already exists. Want to replace the views?',
            'success' => 'Authentication views installed successfully.',
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
        ];
    }

    /**
     * Install/Export the resource.
     *
     * @return void
     */
<<<<<<< HEAD
    public function install() {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function install() {
=======
    public function install()
    {
>>>>>>> 31d6e3b (first)
=======
    public function install() {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
    public function install() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
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
<<<<<<< HEAD
    public function uninstall() {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function uninstall() {
=======
    public function uninstall()
    {
>>>>>>> 31d6e3b (first)
=======
    public function uninstall() {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
    public function uninstall() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
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
<<<<<<< HEAD
    public function exists() {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function exists() {
=======
    public function exists()
    {
>>>>>>> 31d6e3b (first)
=======
    public function exists() {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
    public function exists() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
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
<<<<<<< HEAD
    public function installed() {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function installed() {
=======
    public function installed()
    {
>>>>>>> 31d6e3b (first)
=======
    public function installed() {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
    public function installed() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
     * @param string $path    Absolute path of the authentication view
     * @param string $content The expected content of the view
     *
     * @return bool
     */
    protected function authViewInstalled($path, $content) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 905478d (rebase)
=======
     * @param  string  $path  Absolute path of the authentication view
     * @param  string  $content  The expected content of the view
     * @return bool
     */
    protected function authViewInstalled($path, $content)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param string $path    Absolute path of the authentication view
     * @param string $content The expected content of the view
     *
     * @return bool
     */
    protected function authViewInstalled($path, $content) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
        return is_file($path) && (file_get_contents($path) === $content);
    }
}
