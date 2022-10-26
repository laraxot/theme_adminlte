<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
namespace Themes\AdminLTE\Console;

use Illuminate\Console\Command;
use Themes\AdminLTE\Console\PackageResources\PluginsResource;

<<<<<<< HEAD
class AdminLtePluginCommand extends Command {
=======
class AdminLtePluginCommand extends Command
{
>>>>>>> 31d6e3b (first)
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'adminlte:plugins
        {operation=list : The type of operation: list (default), install or remove}
        {--plugin=* : To apply the operation only over the specified plugins, the value should be a plugin key}
        {--force : To force the overwrite of existing files}
        {--interactive : The installation will guide you through the process}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Manages the installation and removal of additional AdminLTE plugins';

    /**
     * Array with the operations handlers.
     *
     * @var array
     */
    protected $opHandlers;

    /**
     * The plugins package resource instance.
     *
     * @var PluginsResource
     */
    protected $plugins;

    /**
     * Array with the possible statuses of the plugins.
     *
     * @var array
     */
    protected $status = [
        'installed' => [
            'label' => 'Installed',
            'legend' => 'The plugin is installed and matches with the default package plugin',
            'color' => 'green',
        ],
        'mismatch' => [
            'label' => 'Mismatch',
            'legend' => 'The installed plugin mismatch the package plugin (update available or plugin modified)',
            'color' => 'yellow',
        ],
        'uninstalled' => [
            'label' => 'Not Installed',
            'legend' => 'The plugin is not installed',
            'color' => 'red',
        ],
    ];

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

        // Fill the available operations handlers.

        $this->opHandlers = [
<<<<<<< HEAD
            'list' => [$this, 'showPlugins'],
            'install' => [$this, 'installPlugins'],
            'remove' => [$this, 'removePlugins'],
=======
            'list'    => [$this, 'showPlugins'],
            'install' => [$this, 'installPlugins'],
            'remove'  => [$this, 'removePlugins'],
>>>>>>> 31d6e3b (first)
        ];

        // Create the plugins resource instance.

        $this->plugins = new PluginsResource();
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
        // Get the type of operation to perform.

        $op = $this->argument('operation');

        // Check if the operation is valid.

        if (! isset($this->opHandlers[$op])) {
            $this->error("The specified operation: {$op} is not valid!");

            return;
        }

        // Call the handler of the operation.

        $handler = $this->opHandlers[$op];
        $handler();
    }

    /**
     * Display a list with the installation status of the plugins.
     *
     * @return void
     */
<<<<<<< HEAD
    protected function showPlugins() {
=======
    protected function showPlugins()
    {
>>>>>>> 31d6e3b (first)
        // Show the plugins status.

        $pluginsKeys = $this->getAffectedPlugins();
        $this->showPluginsStatus($pluginsKeys);

        // Display the legends table.

        $this->line('');
        $this->showStatusLegends();
    }

    /**
     * Get the list of plugins keys that should be affected by an operation.
     *
     * @return array An array with plugins keys
     */
<<<<<<< HEAD
    protected function getAffectedPlugins() {
=======
    protected function getAffectedPlugins()
    {
>>>>>>> 31d6e3b (first)
        // First, check if the user has specified the plugins keys.

        if (! empty($this->option('plugin'))) {
            return $this->option('plugin');
        }

        // Otherwise, return a list with all the available plugins keys.

        return array_keys($this->plugins->getSourceData());
    }

    /**
     * Display the plugins status.
     *
<<<<<<< HEAD
     * @param array $pluginsKeys Array with the plugins keys to evaluate
     *
     * @return void
     */
    protected function showPluginsStatus($pluginsKeys) {
=======
     * @param  array  $pluginsKeys  Array with the plugins keys to evaluate
     * @return void
     */
    protected function showPluginsStatus($pluginsKeys)
    {
>>>>>>> 31d6e3b (first)
        // Define the table headers.

        $tblHeader = [
            $this->styleOutput('Plugin Name', 'cyan'),
            $this->styleOutput('Plugin Key', 'cyan'),
            $this->styleOutput('Status', 'cyan'),
        ];

        // Create a progress bar.

        $bar = $this->output->createProgressBar(count($pluginsKeys));

        // Initialize the status check procedure.

        $tblContent = [];
        $this->line('Checking the plugins installation ...');
        $bar->start();

        foreach ($pluginsKeys as $key) {
<<<<<<< HEAD
=======

>>>>>>> 31d6e3b (first)
            // Advance the progress bar one step.

            $bar->advance();

            // Get the plugin data.

            $pluginData = $this->plugins->getSourceData($key);

            if (empty($pluginData)) {
                $this->line('');
                $this->error("The plugin key: {$key} is not valid!");
                continue;
            }

            // Fill the status row of the current plugin.

            $status = $this->getPluginStatus($key);
            $tblContent[] = [$pluginData['name'], $key, $status];
        }

        // Finish the progress bar.

        $bar->finish();
        $this->line('');
        $this->line('All plugins checked succesfully!');
        $this->line('');

        // Display the plugins installation status.

        $this->table($tblHeader, $tblContent);
    }

    /**
     * Get the installation status of a plugin.
     *
<<<<<<< HEAD
     * @param string $pluginKey The plugin key
     *
     * @return string The plugin status
     */
    protected function getPluginStatus($pluginKey) {
=======
     * @param  string  $pluginKey  The plugin key
     * @return string The plugin status
     */
    protected function getPluginStatus($pluginKey)
    {
>>>>>>> 31d6e3b (first)
        $status = $this->status['uninstalled'];

        if ($this->plugins->installed($pluginKey)) {
            $status = $this->status['installed'];
        } elseif ($this->plugins->exists($pluginKey)) {
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
    protected function showStatusLegends() {
=======
    protected function showStatusLegends()
    {
>>>>>>> 31d6e3b (first)
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
     * @param string $text  The text to be styled
     * @param string $color The output color for the text
     *
     * @return string The styled text
     */
    protected function styleOutput($text, $color) {
=======
     * @param  string  $text  The text to be styled
     * @param  string  $color  The output color for the text
     * @return string The styled text
     */
    protected function styleOutput($text, $color)
    {
>>>>>>> 31d6e3b (first)
        return "<fg={$color}>{$text}</>";
    }

    /**
     * Installs the specified list of plugins (all if none specified).
     *
     * @return void
     */
<<<<<<< HEAD
    protected function installPlugins() {
=======
    protected function installPlugins()
    {
>>>>>>> 31d6e3b (first)
        $summary = [];

        // Get the list of plugins to be installed.

        $pluginsKeys = $this->getAffectedPlugins();

        // Create a progress bar.

        $bar = $this->output->createProgressBar(count($pluginsKeys));
        $bar->start();

        // Install the plugins.

        foreach ($pluginsKeys as $pluginKey) {
<<<<<<< HEAD
=======

>>>>>>> 31d6e3b (first)
            // Advance the progress bar one step.

            $bar->advance();

            // Install the plugin.

            if ($this->installPlugin($pluginKey)) {
                $status = $this->styleOutput('Installed', 'green');
            } else {
                $status = $this->styleOutput('Not Installed / Invalid', 'red');
            }

            $summary[] = [$pluginKey, $status];
        }

        // Finish the progress bar.

        $bar->finish();
        $this->line('');
        $this->line('The plugins installation is complete. Summary:');
        $this->line('');

        // Show summary of installed plugins.

        $this->showSummaryTable($summary);
    }

    /**
     * Install the specified plugin.
     *
<<<<<<< HEAD
     * @param string $pluginKey The plugin string key
     *
     * @return bool Whether the plugin was succesfully installed
     */
    protected function installPlugin($pluginKey) {
=======
     * @param  string  $pluginKey  The plugin string key
     * @return bool Whether the plugin was succesfully installed
     */
    protected function installPlugin($pluginKey)
    {
>>>>>>> 31d6e3b (first)
        // Customize the output messages.

        $confirmMsg = $this->plugins->getInstallMessage('install');
        $overwriteMsg = $this->plugins->getInstallMessage('overwrite');

        $confirmMsg = strtr($confirmMsg, [':plugin' => $pluginKey]);
        $overwriteMsg = strtr($overwriteMsg, [':plugin' => $pluginKey]);

        // Check if the plugin is valid.

        if (empty($this->plugins->getSourceData($pluginKey))) {
            $this->line('');
            $this->error("The plugin key: {$pluginKey} is not valid!");

            return false;
        }

        // Check if the --interactive option is enabled.

        if ($this->option('interactive') && ! $this->confirm($confirmMsg)) {
            return false;
        }

        // Check for overwrite warning.

        $force = $this->option('force');
        $isOverwrite = ! $force && $this->plugins->exists($pluginKey);

        if ($isOverwrite && ! $this->confirm($overwriteMsg)) {
            return false;
        }

        // Install the plugin.

        $this->plugins->install($pluginKey);

        return true;
    }

    /**
     * Removes the specified list of plugins (all if none specified).
     *
     * @return void
     */
<<<<<<< HEAD
    protected function removePlugins() {
=======
    protected function removePlugins()
    {
>>>>>>> 31d6e3b (first)
        $summary = [];

        // Get the list of plugins to remove.

        $pluginsKeys = $this->getAffectedPlugins();

        // Create a progress bar.

        $bar = $this->output->createProgressBar(count($pluginsKeys));
        $bar->start();

        // Remove the plugins.

        foreach ($pluginsKeys as $pluginKey) {
<<<<<<< HEAD
=======

>>>>>>> 31d6e3b (first)
            // Advance the progress bar one step.

            $bar->advance();

            // Remove the plugin.

            if ($this->removePlugin($pluginKey)) {
                $status = $this->styleOutput('Removed', 'green');
            } else {
                $status = $this->styleOutput('Not Removed / Invalid', 'red');
            }

            $summary[] = [$pluginKey, $status];
        }

        // Finish the progress bar.

        $bar->finish();
        $this->line('');
        $this->line('The plugins removal is complete. Summary:');
        $this->line('');

        // Show summary of removed plugins.

        $this->showSummaryTable($summary);
    }

    /**
     * Remove/Uninstall the specified plugin.
     *
<<<<<<< HEAD
     * @param string $pluginKey The plugin string key
     *
     * @return bool Whether the plugin was succesfully removed
     */
    protected function removePlugin($pluginKey) {
=======
     * @param  string  $pluginKey  The plugin string key
     * @return bool Whether the plugin was succesfully removed
     */
    protected function removePlugin($pluginKey)
    {
>>>>>>> 31d6e3b (first)
        // Customize the output messages.

        $confirmMsg = $this->plugins->getInstallMessage('remove');
        $confirmMsg = strtr($confirmMsg, [':plugin' => $pluginKey]);

        // Check if the plugin is valid.

        if (empty($this->plugins->getSourceData($pluginKey))) {
            $this->line('');
            $this->error("The plugin key: {$pluginKey} is not valid!");

            return false;
        }

        // Check if the --interactive option is enabled.

        if ($this->option('interactive') && ! $this->confirm($confirmMsg)) {
            return false;
        }

        // Remove the plugin.

        $this->plugins->uninstall($pluginKey);

        return true;
    }

    /**
     * Show the summary table for some operation.
     *
<<<<<<< HEAD
     * @param array $rows the table rows
     *
     * @return void
     */
    protected function showSummaryTable($rows) {
=======
     * @param  array  $rows  The table rows.
     * @return void
     */
    protected function showSummaryTable($rows)
    {
>>>>>>> 31d6e3b (first)
        $header = [
            $this->styleOutput('Plugin Key', 'cyan'),
            $this->styleOutput('Status', 'cyan'),
        ];

        $this->table($header, $rows);
    }
}
