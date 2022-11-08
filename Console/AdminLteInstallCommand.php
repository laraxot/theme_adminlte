<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

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
>>>>>>> 905478d (rebase)
namespace Themes\AdminLTE\Console;
=======
namespace Themes\KlekooAdm\Console;
>>>>>>> b738e1c (rebase)

use Illuminate\Console\Command;
use Themes\KlekooAdm\Console\PackageResources\AssetsResource;
use Themes\KlekooAdm\Console\PackageResources\AuthViewsResource;
use Themes\KlekooAdm\Console\PackageResources\BasicRoutesResource;
use Themes\KlekooAdm\Console\PackageResources\BasicViewsResource;
use Themes\KlekooAdm\Console\PackageResources\ConfigResource;
use Themes\KlekooAdm\Console\PackageResources\MainViewsResource;
use Themes\KlekooAdm\Console\PackageResources\TranslationsResource;

<<<<<<< HEAD
class AdminLteInstallCommand extends Command {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
class AdminLteInstallCommand extends Command {
=======
class AdminLteInstallCommand extends Command
{
>>>>>>> 31d6e3b (first)
=======
class AdminLteInstallCommand extends Command {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
class AdminLteInstallCommand extends Command {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
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
>>>>>>> 905478d (rebase)
        parent::__construct();

        // Fill the array with the package resources.

        $this->pkgResources = [
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
            'assets' => new AssetsResource(),
            'config' => new ConfigResource(),
            'translations' => new TranslationsResource(),
            'main_views' => new MainViewsResource(),
            'auth_views' => new AuthViewsResource(),
            'basic_views' => new BasicViewsResource(),
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 905478d (rebase)
=======
            'assets'       => new AssetsResource(),
            'config'       => new ConfigResource(),
            'translations' => new TranslationsResource(),
            'main_views'   => new MainViewsResource(),
            'auth_views'   => new AuthViewsResource(),
            'basic_views'  => new BasicViewsResource(),
>>>>>>> 31d6e3b (first)
=======
            'assets' => new AssetsResource(),
            'config' => new ConfigResource(),
            'translations' => new TranslationsResource(),
            'main_views' => new MainViewsResource(),
            'auth_views' => new AuthViewsResource(),
            'basic_views' => new BasicViewsResource(),
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'basic' => $basic,
            'enhanced' => $enhanced,
            'full' => $full,
=======
            'basic'    => $basic,
            'enhanced' => $enhanced,
            'full'     => $full,
>>>>>>> 31d6e3b (first)
=======
            'basic' => $basic,
            'enhanced' => $enhanced,
            'full' => $full,
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
            'basic' => $basic,
            'enhanced' => $enhanced,
            'full' => $full,
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
        ];

        // Add the resources related to each available --only option.

        $this->optOnlyResources = [
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
            'assets' => ['assets'],
            'config' => ['config'],
            'translations' => ['translations'],
            'main_views' => ['main_views'],
            'auth_views' => ['auth_views'],
            'basic_views' => ['basic_views'],
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 905478d (rebase)
=======
            'assets'       => ['assets'],
            'config'       => ['config'],
            'translations' => ['translations'],
            'main_views'   => ['main_views'],
            'auth_views'   => ['auth_views'],
            'basic_views'  => ['basic_views'],
>>>>>>> 31d6e3b (first)
=======
            'assets' => ['assets'],
            'config' => ['config'],
            'translations' => ['translations'],
            'main_views' => ['main_views'],
            'auth_views' => ['auth_views'],
            'basic_views' => ['basic_views'],
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
            'basic_routes' => ['basic_routes'],
        ];

        // Add the resources related to each available --with option.

        $this->optWithResources = [
<<<<<<< HEAD
            'main_views' => ['main_views'],
            'auth_views' => ['auth_views'],
            'basic_views' => ['basic_views'],
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'main_views' => ['main_views'],
            'auth_views' => ['auth_views'],
            'basic_views' => ['basic_views'],
=======
            'main_views'   => ['main_views'],
            'auth_views'   => ['auth_views'],
            'basic_views'  => ['basic_views'],
>>>>>>> 31d6e3b (first)
=======
            'main_views' => ['main_views'],
            'auth_views' => ['auth_views'],
            'basic_views' => ['basic_views'],
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
            'main_views' => ['main_views'],
            'auth_views' => ['auth_views'],
            'basic_views' => ['basic_views'],
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function handle() {
=======
    public function handle()
    {
>>>>>>> 31d6e3b (first)
=======
    public function handle() {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
    public function handle() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
     * @param array  $values    An array with the option values
     * @param array  $resources An array with the resources of each option
     * @param string $opt       Descriptive name of the handled option
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return void
     */
    protected function handleOptions($values, $resources, $opt) {
<<<<<<< HEAD
=======
=======
     * @param  array  $values  An array with the option values
     * @param  array  $resources  An array with the resources of each option
     * @param  string  $opt  Descriptive name of the handled option
     * @return void
     */
    protected function handleOptions($values, $resources, $opt)
    {
>>>>>>> 31d6e3b (first)
=======
     * @return void
     */
    protected function handleOptions($values, $resources, $opt) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
     * @return void
     */
    protected function handleOptions($values, $resources, $opt) {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
        foreach ($values as $value) {
            $this->handleOption($value, $resources, $opt);
        }
    }

    /**
     * Handle an option value.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
     * @param string $value     A string with the option value
     * @param array  $resources An array with the resources of each option
     * @param string $opt       Descriptive name of the handled option
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return void
     */
    protected function handleOption($value, $resources, $opt) {
<<<<<<< HEAD
=======
=======
     * @param  string  $value  A string with the option value
     * @param  array  $resources  An array with the resources of each option
     * @param  string  $opt  Descriptive name of the handled option
     * @return void
     */
    protected function handleOption($value, $resources, $opt)
    {
>>>>>>> 31d6e3b (first)
=======
     * @return void
     */
    protected function handleOption($value, $resources, $opt) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
     * @return void
     */
    protected function handleOption($value, $resources, $opt) {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
     * @param string $resources The resources to install
     *
     * @return void
     */
    protected function exportPackageResources(...$resources) {
        foreach ($resources as $resource) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 905478d (rebase)
=======
     * @param  string  $resources  The resources to install
=======
     * @param string $resources The resources to install
     *
>>>>>>> f405739 (up)
     * @return void
     */
    protected function exportPackageResources(...$resources) {
        foreach ($resources as $resource) {
<<<<<<< HEAD

>>>>>>> 31d6e3b (first)
=======
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
     * @param string $resource The keyword of the resource to install
     *
     * @return void
     */
    protected function exportPackageResource($resource) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 905478d (rebase)
=======
     * @param  string  $resource  The keyword of the resource to install
     * @return void
     */
    protected function exportPackageResource($resource)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param string $resource The keyword of the resource to install
     *
     * @return void
     */
    protected function exportPackageResource($resource) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
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
