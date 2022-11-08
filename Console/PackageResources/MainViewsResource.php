<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

>>>>>>> f405739 (up)
>>>>>>> f617437 (rebase)
namespace Themes\AdminLTE\Console\PackageResources;

use Themes\AdminLTE\Helpers\CommandHelper;

<<<<<<< HEAD
class MainViewsResource extends PackageResource {
=======
<<<<<<< HEAD
<<<<<<< HEAD
class MainViewsResource extends PackageResource {
=======
class MainViewsResource extends PackageResource
{
>>>>>>> 31d6e3b (first)
=======
class MainViewsResource extends PackageResource {
>>>>>>> f405739 (up)
>>>>>>> f617437 (rebase)
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
    public function __construct() {
=======
    public function __construct()
    {
>>>>>>> 31d6e3b (first)
=======
    public function __construct() {
>>>>>>> f405739 (up)
>>>>>>> f617437 (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
            'install' => 'Install the AdminLTE main views?',
            'overwrite' => 'The main views already exists. Want to replace the views?',
            'success' => 'Main views installed successfully.',
=======
            'install'   => 'Install the AdminLTE main views?',
            'overwrite' => 'The main views already exists. Want to replace the views?',
            'success'   => 'Main views installed successfully.',
>>>>>>> 31d6e3b (first)
=======
            'install' => 'Install the AdminLTE main views?',
            'overwrite' => 'The main views already exists. Want to replace the views?',
            'success' => 'Main views installed successfully.',
>>>>>>> f405739 (up)
>>>>>>> f617437 (rebase)
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
    public function install() {
=======
    public function install()
    {
>>>>>>> 31d6e3b (first)
=======
    public function install() {
>>>>>>> f405739 (up)
>>>>>>> f617437 (rebase)
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
>>>>>>> f617437 (rebase)
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
>>>>>>> f617437 (rebase)
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
>>>>>>> f617437 (rebase)
        return (bool) CommandHelper::compareDirectories(
            $this->source,
            $this->target,
            true
        );
    }
}
