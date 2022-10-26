<?php

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
=======
declare(strict_types=1);

>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
namespace Themes\AdminLTE\Console;
=======
namespace Themes\KlekooAdm\Console;
>>>>>>> b738e1c (rebase)
=======
namespace Themes\AdminLTE\Console;
>>>>>>> 63c2c43 (up)
=======
namespace Themes\KlekooAdm\Console;
>>>>>>> 8a5cc0b (.)
=======
namespace Themes\AdminLTE\Console;
>>>>>>> 5b4054a (.)

use Illuminate\Console\Command;
use Themes\AdminLTE\Console\PackageResources\AssetsResource;
use Themes\AdminLTE\Console\PackageResources\AuthViewsResource;
use Themes\AdminLTE\Console\PackageResources\BasicRoutesResource;
use Themes\AdminLTE\Console\PackageResources\BasicViewsResource;
use Themes\AdminLTE\Console\PackageResources\ConfigResource;
use Themes\AdminLTE\Console\PackageResources\MainViewsResource;
use Themes\AdminLTE\Console\PackageResources\TranslationsResource;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
class AdminLteStatusCommand extends Command {
=======
class AdminLteStatusCommand extends Command
{
>>>>>>> 31d6e3b (first)
=======
class AdminLteStatusCommand extends Command {
>>>>>>> f405739 (up)
=======
class AdminLteStatusCommand extends Command {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'adminlte:status ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Checks the installation status of the AdminLTE resources';

    /**
     * Array with all the available package resources.
     *
     * @var array
     */
    protected $pkgResources;

    /**
     * Array with the possible resources statuses.
     *
     * @var array
     */
    protected $status = [
        'installed' => [
            'label' => 'Installed',
            'legend' => 'The resource is installed and matches with the default package resource',
            'color' => 'green',
        ],
        'mismatch' => [
            'label' => 'Mismatch',
            'legend' => 'The installed resource mismatch the package resource (update available or resource modified)',
            'color' => 'yellow',
        ],
        'uninstalled' => [
            'label' => 'Not Installed',
            'legend' => 'The package resource is not installed',
            'color' => 'red',
        ],
    ];

    /**
     * Create a new command instance.
     *
     * @return void
     */
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
=======
    public function __construct() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        parent::__construct();

        // Fill the array with the package resources.

        $this->pkgResources = [
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
            'assets' => new AssetsResource(),
            'config' => new ConfigResource(),
            'translations' => new TranslationsResource(),
            'main_views' => new MainViewsResource(),
            'auth_views' => new AuthViewsResource(),
            'basic_views' => new BasicViewsResource(),
<<<<<<< HEAD
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
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
            'basic_routes' => new BasicRoutesResource(),
        ];
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
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
=======
    public function handle() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        // Display the resources installation status.

        $this->showResourcesStatus();

        // Display the legends table.

        $this->line('');
        $this->showStatusLegends();
    }

    /**
     * Display the resources status.
     *
     * @return void
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected function showResourcesStatus() {
=======
    protected function showResourcesStatus()
    {
>>>>>>> 31d6e3b (first)
=======
    protected function showResourcesStatus() {
>>>>>>> f405739 (up)
=======
    protected function showResourcesStatus() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        // Define the table headers.

        $tblHeader = [
            $this->styleOutput('Package Resource', 'cyan'),
            $this->styleOutput('Description', 'cyan'),
            $this->styleOutput('Status', 'cyan'),
            $this->styleOutput('Required', 'cyan'),
        ];

        // Get the table rows.

        $tblContent = $this->getResourcesStatusRows();

        // Display the table.

        $this->line('');
        $this->table($tblHeader, $tblContent);
    }

    /**
     * Get the rows for the resources status table.
     *
     * @return array
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected function getResourcesStatusRows() {
=======
    protected function getResourcesStatusRows()
    {
>>>>>>> 31d6e3b (first)
=======
    protected function getResourcesStatusRows() {
>>>>>>> f405739 (up)
=======
    protected function getResourcesStatusRows() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        // Define the array that will hold the table rows.

        $tblContent = [];

        // Create a progress bar.

        $steps = count($this->pkgResources);
        $bar = $this->output->createProgressBar($steps);

        // Initialize the status check procedure.

        $this->line('Checking the resources installation ...');
        $bar->start();

        foreach ($this->pkgResources as $name => $resource) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 31d6e3b (first)
=======
>>>>>>> f405739 (up)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
            // Fill the status row of the current resource.

            $tblContent[] = [
                $name,
                $resource->description,
                $this->getResourceStatus($resource),
                var_export($resource->required, true),
            ];

            // Advance the progress bar one step.

            $bar->advance();
        }

        // Finish the progress bar.

        $bar->finish();
        $this->line('');
        $this->line('All resources checked succesfully!');

        // Return the rows.

        return $tblContent;
    }

    /**
     * Get the installation status of a package resource.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
     * @param PackageResource $resource The package resource to check
     *
     * @return string The resource status
     */
    protected function getResourceStatus($resource) {
<<<<<<< HEAD
=======
     * @param  PackageResource  $resource  The package resource to check
     * @return string The resource status
     */
    protected function getResourceStatus($resource)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param PackageResource $resource The package resource to check
     *
     * @return string The resource status
     */
    protected function getResourceStatus($resource) {
>>>>>>> f405739 (up)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        $status = $this->status['uninstalled'];

        if ($resource->installed()) {
            $status = $this->status['installed'];
        } elseif ($resource->exists()) {
            $status = $this->status['mismatch'];
        }

        return $this->styleOutput($status['label'], $status['color']);
    }

    /**
     * Display the legends of the possible status values.
     *
     * @return void
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected function showStatusLegends() {
=======
    protected function showStatusLegends()
    {
>>>>>>> 31d6e3b (first)
=======
    protected function showStatusLegends() {
>>>>>>> f405739 (up)
=======
    protected function showStatusLegends() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        $this->line('Status legends:');

        // Create the table headers for the legends.

        $tblHeader = [
            $this->styleOutput('Status', 'cyan'),
            $this->styleOutput('Description', 'cyan'),
        ];

        // Create the table rows for the legends.

        $tblContent = [];

        foreach ($this->status as $status) {
            $tblContent[] = [
                $this->styleOutput($status['label'], $status['color']),
                $status['legend'],
            ];
        }

        // Display the legends table.

        $this->table($tblHeader, $tblContent);
    }

    /**
     * Give output style to some text.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
     * @param string $text  The text to be styled
     * @param string $color The output color for the text
     *
     * @return string The styled text
     */
    protected function styleOutput($text, $color) {
<<<<<<< HEAD
=======
     * @param  string  $text  The text to be styled
     * @param  string  $color  The output color for the text
     * @return string The styled text
     */
    protected function styleOutput($text, $color)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param string $text  The text to be styled
     * @param string $color The output color for the text
     *
     * @return string The styled text
     */
    protected function styleOutput($text, $color) {
>>>>>>> f405739 (up)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        return "<fg={$color}>{$text}</>";
    }
}
