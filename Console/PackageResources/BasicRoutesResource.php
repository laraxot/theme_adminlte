<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
namespace Themes\AdminLTE\Console\PackageResources;

use Themes\AdminLTE\Helpers\CommandHelper;

<<<<<<< HEAD
class BasicRoutesResource extends PackageResource {
=======
class BasicRoutesResource extends PackageResource
{
>>>>>>> 31d6e3b (first)
    /**
     * Create a new resource instance.
     *
     * @return void
     */
<<<<<<< HEAD
    public function __construct() {
=======
    public function __construct()
    {
>>>>>>> 31d6e3b (first)
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
            'install'   => 'Install the basic package routes?',
            'overwrite' => 'Basic routes are already installed. Want to install they again?',
            'success'   => 'Basic routes installed successfully.',
>>>>>>> 31d6e3b (first)
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
    public function install()
    {
>>>>>>> 31d6e3b (first)
        // If routes already exists, there is no need to install again.

        if ($this->exists()) {
            return;
        }

        // Get the routes to install.

        $routes = file_get_contents($this->source);

        // Add the routes.

        CommandHelper::ensureDirectoryExists(dirname($this->target));
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
    public function uninstall()
    {
>>>>>>> 31d6e3b (first)
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
    public function exists()
    {
>>>>>>> 31d6e3b (first)
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
        return strpos($targetContent, $routes) !== false;
>>>>>>> 31d6e3b (first)
    }

    /**
     * Check if the resource is correctly installed.
     *
     * @return bool
     */
<<<<<<< HEAD
    public function installed() {
=======
    public function installed()
    {
>>>>>>> 31d6e3b (first)
        return $this->exists();
    }
}
