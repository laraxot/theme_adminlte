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
class TranslationsResource extends PackageResource {
=======
class TranslationsResource extends PackageResource
{
>>>>>>> 31d6e3b (first)
=======
class TranslationsResource extends PackageResource {
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

        $this->description = 'The default package translations files';
        $this->source = CommandHelper::getPackagePath('resources/lang');
        $this->target = resource_path('lang/vendor/adminlte');
        $this->required = true;

        // Fill the set of installation messages.

        $this->messages = [
<<<<<<< HEAD
<<<<<<< HEAD
            'install' => 'Install the package translations files?',
            'overwrite' => 'The translation files already exists. Want to replace the files?',
            'success' => 'Translation files installed successfully.',
=======
            'install'   => 'Install the package translations files?',
            'overwrite' => 'The translation files already exists. Want to replace the files?',
            'success'   => 'Translation files installed successfully.',
>>>>>>> 31d6e3b (first)
=======
            'install' => 'Install the package translations files?',
            'overwrite' => 'The translation files already exists. Want to replace the files?',
            'success' => 'Translation files installed successfully.',
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
        // Install the translations files.

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
    public function uninstall()
    {
>>>>>>> 31d6e3b (first)
=======
    public function uninstall() {
>>>>>>> f405739 (up)
        // Uninstall the translation files.

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
    public function exists()
    {
>>>>>>> 31d6e3b (first)
=======
    public function exists() {
>>>>>>> f405739 (up)
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
    public function installed()
    {
>>>>>>> 31d6e3b (first)
=======
    public function installed() {
>>>>>>> f405739 (up)
        return (bool) CommandHelper::compareDirectories(
            $this->source,
            $this->target,
            true
        );
    }
}
