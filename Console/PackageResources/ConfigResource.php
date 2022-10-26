<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

>>>>>>> f405739 (up)
namespace Themes\AdminLTE\Console\PackageResources;

use Themes\AdminLTE\Helpers\CommandHelper;

<<<<<<< HEAD
<<<<<<< HEAD
class ConfigResource extends PackageResource {
=======
class ConfigResource extends PackageResource
{
>>>>>>> 31d6e3b (first)
=======
class ConfigResource extends PackageResource {
>>>>>>> f405739 (up)
    /**
     * Create a new resource instance.
     *
     * @return void
     */
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
        // Fill the resource data.

        $this->description = 'The default package configuration file';
        $this->source = CommandHelper::getPackagePath('config/adminlte.php');
        $this->target = config_path('adminlte.php');
        $this->required = true;

        // Fill the set of installation messages.

        $this->messages = [
<<<<<<< HEAD
<<<<<<< HEAD
            'install' => 'Install the package config file?',
            'overwrite' => 'The config file already exists. Want to replace it?',
            'success' => 'Configuration file installed successfully.',
=======
            'install'   => 'Install the package config file?',
            'overwrite' => 'The config file already exists. Want to replace it?',
            'success'   => 'Configuration file installed successfully.',
>>>>>>> 31d6e3b (first)
=======
            'install' => 'Install the package config file?',
            'overwrite' => 'The config file already exists. Want to replace it?',
            'success' => 'Configuration file installed successfully.',
>>>>>>> f405739 (up)
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
    public function install()
    {
>>>>>>> 31d6e3b (first)
=======
    public function install() {
>>>>>>> f405739 (up)
        // Install the configuration file.

        CommandHelper::ensureDirectoryExists(dirname($this->target));
        copy($this->source, $this->target);
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
    public function uninstall()
    {
>>>>>>> 31d6e3b (first)
=======
    public function uninstall() {
>>>>>>> f405739 (up)
        // Uninstall the configuration file.

        if (is_file($this->target)) {
            unlink($this->target);
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
    public function exists()
    {
>>>>>>> 31d6e3b (first)
=======
    public function exists() {
>>>>>>> f405739 (up)
        return is_file($this->target);
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
    public function installed()
    {
>>>>>>> 31d6e3b (first)
=======
    public function installed() {
>>>>>>> f405739 (up)
        return CommandHelper::compareFiles($this->source, $this->target);
    }
}
