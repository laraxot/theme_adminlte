<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
namespace Themes\AdminLTE\Console;

use Illuminate\Console\Command;
use Themes\AdminLTE\Console\PackageResources\AssetsResource;
use Themes\AdminLTE\Console\PackageResources\AuthViewsResource;
use Themes\AdminLTE\Console\PackageResources\BasicRoutesResource;
use Themes\AdminLTE\Console\PackageResources\BasicViewsResource;
use Themes\AdminLTE\Console\PackageResources\ConfigResource;
use Themes\AdminLTE\Console\PackageResources\MainViewsResource;
use Themes\AdminLTE\Console\PackageResources\TranslationsResource;

<<<<<<< HEAD
class AdminLteInstallCommand extends Command {
=======
class AdminLteInstallCommand extends Command
{
>>>>>>> 31d6e3b (first)
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'adminlte:install
        {--type=basic : The installation type: basic (default), enhanced or full}
        {--only=* : To install only specific resources: assets, config, translations, auth_views, basic_views, basic_routes or main_views. Can\'t be used with option --with}
        {--with=* : To install with additional resources: auth_views, basic_views, basic_routes or main_views}
        {--force : To force the overwrite of existing files}
        {--interactive : The installation will guide you through the process}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install all the required files for AdminLTE, and additional resources';

    /**
     * Array with all the available package resources.
     *
     * @var array
     */
    protected $pkgResources;

    /**
     * Array with all the installed packages on the current execution.
     *
     * @var array
     */
    protected $installedResources;

    /**
     * Array with the resources available for the --only options.
     *
     * @var array
     */
    protected $optOnlyResources;

    /**
     * Array with the resources available for the --with options.
     *
     * @var array
     */
    protected $optWithResources;

    /**
     * Array with the resources available for the --type options.
     *
     * @var array
     */
    protected $optTypeResources;

    /**
     * Create a new command instance.
     *
     * @return void
     */
<<<<<<< HEAD
    public function __construct() {
=======
    public function __construct()
    {
>>>>>>> 31d6e3b (first)
        parent::__construct();

        // Fill the array with the package resources.

        $this->pkgResources = [
<<<<<<< HEAD
            'assets' => new AssetsResource(),
            'config' => new ConfigResource(),
            'translations' => new TranslationsResource(),
            'main_views' => new MainViewsResource(),
            'auth_views' => new AuthViewsResource(),
            'basic_views' => new BasicViewsResource(),
=======
            'assets'       => new AssetsResource(),
            'config'       => new ConfigResource(),
            'translations' => new TranslationsResource(),
            'main_views'   => new MainViewsResource(),
            'auth_views'   => new AuthViewsResource(),
            'basic_views'  => new BasicViewsResource(),
>>>>>>> 31d6e3b (first)
            'basic_routes' => new BasicRoutesResource(),
        ];

        // Add the resources related to each available --type option.

        $basic = ['assets', 'config', 'translations'];
        $enhanced = array_merge($basic, ['auth_views']);
        $full = array_merge($enhanced, ['basic_views', 'basic_routes']);

        $this->optTypeResources = [
<<<<<<< HEAD
            'basic' => $basic,
            'enhanced' => $enhanced,
            'full' => $full,
=======
            'basic'    => $basic,
            'enhanced' => $enhanced,
            'full'     => $full,
>>>>>>> 31d6e3b (first)
        ];

        // Add the resources related to each available --only option.

        $this->optOnlyResources = [
<<<<<<< HEAD
            'assets' => ['assets'],
            'config' => ['config'],
            'translations' => ['translations'],
            'main_views' => ['main_views'],
            'auth_views' => ['auth_views'],
            'basic_views' => ['basic_views'],
=======
            'assets'       => ['assets'],
            'config'       => ['config'],
            'translations' => ['translations'],
            'main_views'   => ['main_views'],
            'auth_views'   => ['auth_views'],
            'basic_views'  => ['basic_views'],
>>>>>>> 31d6e3b (first)
            'basic_routes' => ['basic_routes'],
        ];

        // Add the resources related to each available --with option.

        $this->optWithResources = [
<<<<<<< HEAD
            'main_views' => ['main_views'],
            'auth_views' => ['auth_views'],
            'basic_views' => ['basic_views'],
=======
            'main_views'   => ['main_views'],
            'auth_views'   => ['auth_views'],
            'basic_views'  => ['basic_views'],
>>>>>>> 31d6e3b (first)
            'basic_routes' => ['basic_routes'],
        ];
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
<<<<<<< HEAD
    public function handle() {
=======
    public function handle()
    {
>>>>>>> 31d6e3b (first)
        // Reset the variable that keep track of the installed packages.

        $this->installedResources = [];

        // Check if option --only is used. In this case, install the specified
        // parts and return.

        if ($optValues = $this->option('only')) {
            $this->handleOptions($optValues, $this->optOnlyResources, 'only');

            return;
        }

        // Handle the --type option. Default value for this option is "basic"
        // installation type.

        $optValue = $this->option('type');
        $this->handleOption($optValue, $this->optTypeResources, 'type');

        // Check if option --with is used. In this case, also install the
        // specified parts.

        if ($optValues = $this->option('with')) {
            $this->handleOptions($optValues, $this->optWithResources, 'with');
        }

        $this->line('The installation is complete.');
    }

    /**
     * Handle multiple option values.
     *
<<<<<<< HEAD
     * @param array  $values    An array with the option values
     * @param array  $resources An array with the resources of each option
     * @param string $opt       Descriptive name of the handled option
     *
     * @return void
     */
    protected function handleOptions($values, $resources, $opt) {
=======
     * @param  array  $values  An array with the option values
     * @param  array  $resources  An array with the resources of each option
     * @param  string  $opt  Descriptive name of the handled option
     * @return void
     */
    protected function handleOptions($values, $resources, $opt)
    {
>>>>>>> 31d6e3b (first)
        foreach ($values as $value) {
            $this->handleOption($value, $resources, $opt);
        }
    }

    /**
     * Handle an option value.
     *
<<<<<<< HEAD
     * @param string $value     A string with the option value
     * @param array  $resources An array with the resources of each option
     * @param string $opt       Descriptive name of the handled option
     *
     * @return void
     */
    protected function handleOption($value, $resources, $opt) {
=======
     * @param  string  $value  A string with the option value
     * @param  array  $resources  An array with the resources of each option
     * @param  string  $opt  Descriptive name of the handled option
     * @return void
     */
    protected function handleOption($value, $resources, $opt)
    {
>>>>>>> 31d6e3b (first)
        if (! isset($resources[$value])) {
            $this->comment("The option --{$opt}={$value} is invalid!");

            return;
        }

        // Install all the resources related to the option value.

        $this->exportPackageResources(...$resources[$value]);
    }

    /**
     * Install multiple packages resources.
     *
<<<<<<< HEAD
     * @param string $resources The resources to install
     *
     * @return void
     */
    protected function exportPackageResources(...$resources) {
        foreach ($resources as $resource) {
=======
     * @param  string  $resources  The resources to install
     * @return void
     */
    protected function exportPackageResources(...$resources)
    {
        foreach ($resources as $resource) {

>>>>>>> 31d6e3b (first)
            // Check if resource was already installed on the current command
            // execution. This can happen, for example, when using:
            // php artisan --type=full --with=auth_views

            if (isset($this->installedResources[$resource])) {
                continue;
            }

            $this->exportPackageResource($resource);
            $this->installedResources[$resource] = true;
        }
    }

    /**
     * Install a package resource.
     *
<<<<<<< HEAD
     * @param string $resource The keyword of the resource to install
     *
     * @return void
     */
    protected function exportPackageResource($resource) {
=======
     * @param  string  $resource  The keyword of the resource to install
     * @return void
     */
    protected function exportPackageResource($resource)
    {
>>>>>>> 31d6e3b (first)
        $resource = $this->pkgResources[$resource];
        $installMsg = $resource->getInstallMessage('install');
        $overwriteMsg = $resource->getInstallMessage('overwrite');
        $successMsg = $resource->getInstallMessage('success');

        // Check if the --interactive option is enabled.

        if ($this->option('interactive') && ! $this->confirm($installMsg)) {
            return;
        }

        // Check for overwrite warning.

        $isOverwrite = ! $this->option('force') && $resource->exists();

        if ($isOverwrite && ! $this->confirm($overwriteMsg)) {
            return;
        }

        // Install the resource.

        $resource->install();
        $this->info($successMsg);
    }
}
