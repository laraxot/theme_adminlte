<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
namespace Themes\AdminLTE\Console\PackageResources;

use Themes\AdminLTE\Helpers\CommandHelper;

<<<<<<< HEAD
class BasicViewsResource extends PackageResource {
=======
class BasicViewsResource extends PackageResource
{
>>>>>>> 31d6e3b (first)
    /**
     * Array with the replacement content of the basic views.
     *
     * @var array
     */
    protected $basicViewsContent = [
        'home.blade.php' => 'home.stub',
    ];

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

        $this->description = 'The default package basic views';
        $this->source = $this->basicViewsContent;
        $this->target = CommandHelper::getViewPath();
        $this->required = false;

        // Fill the set of installation messages.

        $this->messages = [
<<<<<<< HEAD
            'install' => 'Install the AdminLTE basic views?',
            'overwrite' => 'The basic views already exists. Want to replace the views?',
            'success' => 'Basic views installed successfully.',
=======
            'install'   => 'Install the AdminLTE basic views?',
            'overwrite' => 'The basic views already exists. Want to replace the views?',
            'success'   => 'Basic views installed successfully.',
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
        // Install the basic views. We going to replace the content of any
        // existing basic view.

        foreach ($this->source as $file => $stub) {
            $target = $this->target.DIRECTORY_SEPARATOR.$file;
            CommandHelper::ensureDirectoryExists(dirname($target));
            copy(CommandHelper::getStubPath($stub), $target);
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
    public function uninstall()
    {
>>>>>>> 31d6e3b (first)
        // Remove the package basic views.

        foreach ($this->source as $file => $tub) {
            $target = $this->target.DIRECTORY_SEPARATOR.$file;

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
    public function exists()
    {
>>>>>>> 31d6e3b (first)
        // Check if any of the basic views already exists.

        foreach ($this->source as $file => $stub) {
            $target = $this->target.DIRECTORY_SEPARATOR.$file;

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
    public function installed()
    {
>>>>>>> 31d6e3b (first)
        foreach ($this->source as $file => $stub) {
            $target = $this->target.DIRECTORY_SEPARATOR.$file;
            $content = file_get_contents(CommandHelper::getStubPath($stub));

            if (! $this->basicViewInstalled($target, $content)) {
                return false;
            }
        }

        return true;
    }

    /**
     * Check if a basic view is correctly installed.
     *
<<<<<<< HEAD
     * @param string $path    Absolute path of the view
     * @param string $content The expected content of the view
     *
     * @return bool
     */
    protected function basicViewInstalled($path, $content) {
=======
     * @param  string  $path  Absolute path of the view
     * @param  string  $content  The expected content of the view
     * @return bool
     */
    protected function basicViewInstalled($path, $content)
    {
>>>>>>> 31d6e3b (first)
        return is_file($path) && (file_get_contents($path) === $content);
    }
}
