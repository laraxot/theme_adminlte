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

<<<<<<< HEAD
class BasicRoutesResource extends PackageResource {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
class BasicRoutesResource extends PackageResource {
=======
class BasicRoutesResource extends PackageResource
{
>>>>>>> 31d6e3b (first)
=======
class BasicRoutesResource extends PackageResource {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
class BasicRoutesResource extends PackageResource {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
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

        $this->description = 'The package routes';
        $this->source = CommandHelper::getStubPath('routes.stub');
        $this->target = base_path('routes/web.php');
        $this->required = false;

        // Fill the installation messages.

        $this->messages = [
<<<<<<< HEAD
            'install' => 'Install the basic package routes?',
            'overwrite' => 'Basic routes are already installed. Want to install they again?',
            'success' => 'Basic routes installed successfully.',
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'install' => 'Install the basic package routes?',
            'overwrite' => 'Basic routes are already installed. Want to install they again?',
            'success' => 'Basic routes installed successfully.',
=======
            'install'   => 'Install the basic package routes?',
            'overwrite' => 'Basic routes are already installed. Want to install they again?',
            'success'   => 'Basic routes installed successfully.',
>>>>>>> 31d6e3b (first)
=======
            'install' => 'Install the basic package routes?',
            'overwrite' => 'Basic routes are already installed. Want to install they again?',
            'success' => 'Basic routes installed successfully.',
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
            'install' => 'Install the basic package routes?',
            'overwrite' => 'Basic routes are already installed. Want to install they again?',
            'success' => 'Basic routes installed successfully.',
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
        // If routes already exists, there is no need to install again.

        if ($this->exists()) {
            return;
        }

        // Get the routes to install.

        $routes = file_get_contents($this->source);

        // Add the routes.

        CommandHelper::ensureDirectoryExists(\dirname($this->target));
        file_put_contents($this->target, $routes, FILE_APPEND);
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
        $routes = file_get_contents($this->source);

        // If the target routes file exists, remove the package routes.

        if (is_file($this->target)) {
            $targetContent = file_get_contents($this->target);
            $targetContent = str_replace($routes, '', $targetContent);
            file_put_contents($this->target, $targetContent);
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
        $routes = file_get_contents($this->source);

        // First, check if the target routes file exists.

        if (! is_file($this->target)) {
            return false;
        }

        // Now, check if the target file already contains the routes.

        $targetContent = file_get_contents($this->target);

<<<<<<< HEAD
        return false !== strpos($targetContent, $routes);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return false !== strpos($targetContent, $routes);
=======
        return strpos($targetContent, $routes) !== false;
>>>>>>> 31d6e3b (first)
=======
        return false !== strpos($targetContent, $routes);
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
        return false !== strpos($targetContent, $routes);
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
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
        return $this->exists();
    }
}
