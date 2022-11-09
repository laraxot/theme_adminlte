<?php

<<<<<<< HEAD
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
>>>>>>> 905478d7 (rebase)
=======
declare(strict_types=1);

>>>>>>> d79d738c (up)
namespace Themes\AdminLTE\Console\PackageResources;

use Themes\AdminLTE\Helpers\CommandHelper;

<<<<<<< HEAD
<<<<<<< HEAD
class MainViewsResource extends PackageResource {
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
class MainViewsResource extends PackageResource {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
=======
class MainViewsResource extends PackageResource {
>>>>>>> d79d738c (up)
    /**
     * Create a new resource instance.
     *
     * @return void
     */
<<<<<<< HEAD
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
>>>>>>> 905478d7 (rebase)
=======
    public function __construct() {
>>>>>>> d79d738c (up)
        // Fill the resource data.

        $this->description = 'The default package main views';
        $this->source = CommandHelper::getPackagePath('resources/views');
        $this->target = CommandHelper::getViewPath('vendor/adminlte');
        $this->required = false;

        // Fill the set of installation messages.

        $this->messages = [
<<<<<<< HEAD
<<<<<<< HEAD
            'install' => 'Install the AdminLTE main views?',
            'overwrite' => 'The main views already exists. Want to replace the views?',
            'success' => 'Main views installed successfully.',
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
            'install' => 'Install the AdminLTE main views?',
            'overwrite' => 'The main views already exists. Want to replace the views?',
            'success' => 'Main views installed successfully.',
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
=======
            'install' => 'Install the AdminLTE main views?',
            'overwrite' => 'The main views already exists. Want to replace the views?',
            'success' => 'Main views installed successfully.',
>>>>>>> d79d738c (up)
        ];
    }

    /**
     * Install/Export the resource.
     *
     * @return void
     */
<<<<<<< HEAD
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
>>>>>>> 905478d7 (rebase)
=======
    public function install() {
>>>>>>> d79d738c (up)
        // Install the main views.

        CommandHelper::copyDirectory($this->source, $this->target, true, true);
    }

    /**
     * Uninstall/Remove the resource.
     *
     * @return void
     */
<<<<<<< HEAD
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
>>>>>>> 905478d7 (rebase)
=======
    public function uninstall() {
>>>>>>> d79d738c (up)
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
>>>>>>> 905478d7 (rebase)
=======
    public function exists() {
>>>>>>> d79d738c (up)
        return is_dir($this->target);
    }

    /**
     * Check if the resource is correctly installed.
     *
     * @return bool
     */
<<<<<<< HEAD
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
>>>>>>> 905478d7 (rebase)
=======
    public function installed() {
>>>>>>> d79d738c (up)
        return (bool) CommandHelper::compareDirectories(
            $this->source,
            $this->target,
            true
        );
    }
}
