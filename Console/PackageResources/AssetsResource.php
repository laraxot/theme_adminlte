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
=======
namespace Themes\AdminLTE\Console\PackageResources;
>>>>>>> 5b4054a (.)

use Themes\AdminLTE\Helpers\CommandHelper;

<<<<<<< HEAD
class AssetsResource extends PackageResource {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
class AssetsResource extends PackageResource {
=======
class AssetsResource extends PackageResource
{
>>>>>>> 31d6e3b (first)
=======
class AssetsResource extends PackageResource {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
class AssetsResource extends PackageResource {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
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
>>>>>>> 905478d7 (rebase)
        // Fill the resource data.

        $this->description = 'The AdminLTE required assets';
        $this->target = public_path('vendor');
        $this->required = true;

        // Define the array of required assets (source).

        $this->source = [
            'adminlte' => [
                'name' => 'AdminLTE v3',
                'source' => base_path('vendor/almasaeed2010/adminlte/'),
                'target' => public_path('vendor/adminlte/'),
                'resources' => [
                    [
                        'source' => 'dist/css',
                        'recursive' => false,
                    ],
                    [
                        'source' => 'dist/js',
                        'recursive' => false,
                        'ignore' => [
                            'demo.js',
                        ],
                    ],
                    [
                        'source' => 'dist/img/AdminLTELogo.png',
                    ],
                ],
            ],
            'fontawesome' => [
                'name' => 'FontAwesome 5 Free',
                'source' => base_path('vendor/almasaeed2010/adminlte/plugins/fontawesome-free'),
                'target' => public_path('vendor/fontawesome-free'),
            ],
            'bootstrap' => [
                'name' => 'Bootstrap 4 (js files only)',
                'source' => base_path('vendor/almasaeed2010/adminlte/plugins/bootstrap'),
                'target' => public_path('vendor/bootstrap'),
            ],
            'popper' => [
                'name' => 'Popper.js (Bootstrap 4 requirement)',
                'source' => base_path('vendor/almasaeed2010/adminlte/plugins/popper'),
                'target' => public_path('vendor/popper'),
            ],
            'jquery' => [
                'name' => 'jQuery (Bootstrap 4 requirement)',
                'source' => base_path('vendor/almasaeed2010/adminlte/plugins/jquery'),
                'target' => public_path('vendor/jquery'),
                'ignore' => [
                    'core.js',
                    'jquery.slim.js',
                    'jquery.slim.min.js',
                    'jquery.slim.min.map',
                ],
            ],
            'overlay' => [
                'name' => 'Overlay Scrollbars',
                'source' => base_path('vendor/almasaeed2010/adminlte/plugins/overlayScrollbars'),
                'target' => public_path('vendor/overlayScrollbars'),
            ],
        ];

        // Fill the set of installation messages.

        $this->messages = [
<<<<<<< HEAD
            'install' => 'Install the basic package assets?',
            'overwrite' => 'The basic assets already exists. Want to replace the assets?',
            'success' => 'Basic assets installed successfully.',
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'install' => 'Install the basic package assets?',
            'overwrite' => 'The basic assets already exists. Want to replace the assets?',
            'success' => 'Basic assets installed successfully.',
=======
            'install'   => 'Install the basic package assets?',
            'overwrite' => 'The basic assets already exists. Want to replace the assets?',
            'success'   => 'Basic assets installed successfully.',
>>>>>>> 31d6e3b (first)
=======
            'install' => 'Install the basic package assets?',
            'overwrite' => 'The basic assets already exists. Want to replace the assets?',
            'success' => 'Basic assets installed successfully.',
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
            'install' => 'Install the basic package assets?',
            'overwrite' => 'The basic assets already exists. Want to replace the assets?',
            'success' => 'Basic assets installed successfully.',
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
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
>>>>>>> 905478d7 (rebase)
        // Install the AdminLTE basic assets.

        foreach ($this->source as $asset) {
            $this->installAsset($asset);
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
>>>>>>> 905478d7 (rebase)
        // Uninstall the AdminLTE basic assets.

        foreach ($this->source as $asset) {
            $this->uninstallAsset($asset);
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
>>>>>>> 905478d7 (rebase)
        foreach ($this->source as $asset) {
            if ($this->assetExists($asset)) {
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
>>>>>>> 905478d7 (rebase)
        foreach ($this->source as $asset) {
            if (! $this->assetInstalled($asset)) {
                return false;
            }
        }

        return true;
    }

    /**
     * Install the specified AdminLTE asset.
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
>>>>>>> 905478d7 (rebase)
     * @param array $asset An array with the asset data
     *
     * @return void
     */
    protected function installAsset($asset) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 905478d7 (rebase)
=======
     * @param  array  $asset  An array with the asset data
     * @return void
     */
    protected function installAsset($asset)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param array $asset An array with the asset data
     *
     * @return void
     */
    protected function installAsset($asset) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
        // Check if we just need to export the entire asset.

        if (! isset($asset['resources'])) {
            $this->exportResource($asset);

            return;
        }

        // Otherwise, export only the specified asset resources.

        foreach ($asset['resources'] as $res) {
            $res['target'] = $res['target'] ?? $res['source'];
            $res['target'] = $asset['target'].$res['target'];
            $res['source'] = $asset['source'].$res['source'];
            $this->exportResource($res);
        }
    }

    /**
     * Exports the specified resource (usually a file or folder).
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
>>>>>>> 905478d7 (rebase)
     * @param array $res An array with the resource data
     *
     * @return void
     */
    protected function exportResource($res) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 905478d7 (rebase)
=======
     * @param  array  $res  An array with the resource data
     * @return void
     */
    protected function exportResource($res)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param array $res An array with the resource data
     *
     * @return void
     */
    protected function exportResource($res) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
        // Check the resource type in order to copy it.

        if (is_dir($res['source'])) {
            CommandHelper::copyDirectory(
                $res['source'],
                $res['target'],
                $res['force'] ?? true,
                $res['recursive'] ?? true,
                $res['ignore'] ?? []
            );
        } elseif (is_file($res['source'])) {
            CommandHelper::ensureDirectoryExists(\dirname($res['target']));
            copy($res['source'], $res['target']);
        }
    }

    /**
     * Check if the specified asset already exists on the target destination.
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
>>>>>>> 905478d7 (rebase)
     * @param array $asset An array with the asset data
     *
     * @return bool
     */
    protected function assetExists($asset) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 905478d7 (rebase)
=======
     * @param  array  $asset  An array with the asset data
     * @return bool
     */
    protected function assetExists($asset)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param array $asset An array with the asset data
     *
     * @return bool
     */
    protected function assetExists($asset) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
        return is_dir($asset['target']);
    }

    /**
     * Check if the specified asset is correctly installed.
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
>>>>>>> 905478d7 (rebase)
     * @param array $asset An array with the asset data
     *
     * @return bool
     */
    protected function assetInstalled($asset) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 905478d7 (rebase)
=======
     * @param  array  $asset  An array with the asset data
     * @return bool
     */
    protected function assetInstalled($asset)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param array $asset An array with the asset data
     *
     * @return bool
     */
    protected function assetInstalled($asset) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
        // Check if the asset have resources.

        if (! isset($asset['resources'])) {
            return $this->resourceInstalled($asset);
        }

        foreach ($asset['resources'] as $res) {
            $res['target'] = $res['target'] ?? $res['source'];
            $res['target'] = $asset['target'].$res['target'];
            $res['source'] = $asset['source'].$res['source'];

            if (! $this->resourceInstalled($res)) {
                return false;
            }
        }

        return true;
    }

    /**
     * Check if the specified resource is correctly installed.
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
>>>>>>> 905478d7 (rebase)
     * @param array $res An array with the resource data
     *
     * @return bool
     */
    protected function resourceInstalled($res) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 905478d7 (rebase)
=======
     * @param  array  $res  An array with the resource data
     * @return bool
     */
    protected function resourceInstalled($res)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param array $res An array with the resource data
     *
     * @return bool
     */
    protected function resourceInstalled($res) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
        $installed = false;

        if (is_dir($res['source'])) {
            $installed = (bool) CommandHelper::compareDirectories(
                $res['source'],
                $res['target'],
                $res['recursive'] ?? true,
                $res['ignore'] ?? []
            );
        } elseif (is_file($res['source'])) {
            $installed = CommandHelper::compareFiles(
                $res['source'],
                $res['target']
            );
        }

        return $installed;
    }

    /**
     * Uninstall or remove the specified asset.
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
>>>>>>> 905478d7 (rebase)
     * @param array $asset An array with the asset data
     *
     * @return void
     */
    protected function uninstallAsset($asset) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 905478d7 (rebase)
=======
     * @param  array  $asset  An array with the asset data
     * @return void
     */
    protected function uninstallAsset($asset)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param array $asset An array with the asset data
     *
     * @return void
     */
    protected function uninstallAsset($asset) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
        $target = $asset['target'];

        // Uninstall the asset (actually, the target should be a folder).

        if (is_dir($target)) {
            CommandHelper::removeDirectory($target);
        }
    }
}
