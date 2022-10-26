<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
namespace Themes\AdminLTE\Console\PackageResources;

use Themes\AdminLTE\Helpers\CommandHelper;

<<<<<<< HEAD
class MainViewsResource extends PackageResource {
=======
class MainViewsResource extends PackageResource
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

        $this->description = 'The default package main views';
        $this->source = CommandHelper::getPackagePath('resources/views');
        $this->target = CommandHelper::getViewPath('vendor/adminlte');
        $this->required = false;

        // Fill the set of installation messages.

        $this->messages = [
<<<<<<< HEAD
            'install' => 'Install the AdminLTE main views?',
            'overwrite' => 'The main views already exists. Want to replace the views?',
            'success' => 'Main views installed successfully.',
=======
            'install'   => 'Install the AdminLTE main views?',
            'overwrite' => 'The main views already exists. Want to replace the views?',
            'success'   => 'Main views installed successfully.',
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
        // Install the main views.

        CommandHelper::copyDirectory($this->source, $this->target, true, true);
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
<<<<<<< HEAD
    public function exists() {
=======
    public function exists()
    {
>>>>>>> 31d6e3b (first)
        return is_dir($this->target);
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
        return (bool) CommandHelper::compareDirectories(
            $this->source,
            $this->target,
            true
        );
    }
}
