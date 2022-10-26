<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
namespace Themes\AdminLTE\Console\PackageResources;

use Themes\AdminLTE\Helpers\CommandHelper;

<<<<<<< HEAD
class TranslationsResource extends PackageResource {
=======
class TranslationsResource extends PackageResource
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

        $this->description = 'The default package translations files';
        $this->source = CommandHelper::getPackagePath('resources/lang');
        $this->target = resource_path('lang/vendor/adminlte');
        $this->required = true;

        // Fill the set of installation messages.

        $this->messages = [
<<<<<<< HEAD
            'install' => 'Install the package translations files?',
            'overwrite' => 'The translation files already exists. Want to replace the files?',
            'success' => 'Translation files installed successfully.',
=======
            'install'   => 'Install the package translations files?',
            'overwrite' => 'The translation files already exists. Want to replace the files?',
            'success'   => 'Translation files installed successfully.',
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
        // Install the translations files.

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
