<?php

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> 59a8928 (rebase)
>>>>>>> 655502de (rebase)
declare(strict_types=1);

<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 4a726e2 (rebase)
=======
>>>>>>> f63434d (rebase)
=======
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
declare(strict_types=1);

>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 312af933 (rebase)
=======
=======
>>>>>>> a159d289 (rebase)
=======
declare(strict_types=1);

>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
declare(strict_types=1);

>>>>>>> dfca2a99 (rebase)
namespace Themes\AdminLTE\Console\PackageResources;

use Themes\AdminLTE\Helpers\CommandHelper;

<<<<<<< HEAD
<<<<<<< HEAD
class PluginsResource extends PackageResource {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
class PluginsResource extends PackageResource {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
class PluginsResource extends PackageResource {
=======
class PluginsResource extends PackageResource
{
>>>>>>> 31d6e3b (first)
=======
class PluginsResource extends PackageResource {
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
class PluginsResource extends PackageResource {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
class PluginsResource extends PackageResource {
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
class PluginsResource extends PackageResource {
>>>>>>> dfca2a99 (rebase)
    /**
     * The available plugins data. A plugin can contain next data keys:
     * - name: The name of the plugin.
     * - source: The source of the plugin (relative to base source)
     * - target: The target of the plugin (relative to base target)
     * - resources: An array with resources data items.
     * - ignore: A list of file patterns to ignore.
     * - recursive: Whether to copy files recursively (default is true).
     *
     * When the target is not specified, the source will be used as the
     * relative path to the base target destination. A resource can contain the
     * same keys that are availables for a plugin.
     *
     * @var array
     */
    protected $plugins = [
        'bootstrap4DualListbox' => [
            'name' => 'Bootstrap4 Dual Listbox',
            'source' => 'bootstrap4-duallistbox',
        ],
        'bootstrapColorpicker' => [
            'name' => 'Bootstrap Colorpicker',
            'source' => 'bootstrap-colorpicker',
        ],
        'bootstrapSlider' => [
            'name' => 'Bootstrap Slider',
            'source' => 'bootstrap-slider',
        ],
        'bootstrapSwitch' => [
            'name' => 'Bootstrap Switch',
            'source' => 'bootstrap-switch',
        ],
        'bsCustomFileInput' => [
            'name' => 'bs-custom-file-input',
            'source' => 'bs-custom-file-input',
        ],
        'chartJs' => [
            'name' => 'Chart.js',
            'source' => 'chart.js',
        ],
        'datatables' => [
            'name' => 'Datatables',
            'resources' => [
                ['source' => 'datatables', 'target' => 'datatables/js'],
                ['source' => 'datatables-bs4', 'target' => 'datatables'],
            ],
        ],
        'datatablesPlugins' => [
            'name' => 'Datatables Plugins',
            'resources' => [
                ['source' => 'datatables-autofill', 'target' => 'datatables-plugins/autofill'],
                ['source' => 'datatables-buttons', 'target' => 'datatables-plugins/buttons'],
                ['source' => 'datatables-colreorder', 'target' => 'datatables-plugins/colreorder'],
                ['source' => 'datatables-fixedcolumns', 'target' => 'datatables-plugins/fixedcolumns'],
                ['source' => 'datatables-fixedheader', 'target' => 'datatables-plugins/fixedheader'],
                ['source' => 'datatables-keytable', 'target' => 'datatables-plugins/keytable'],
                ['source' => 'datatables-responsive', 'target' => 'datatables-plugins/responsive'],
                ['source' => 'datatables-rowgroup', 'target' => 'datatables-plugins/rowgroup'],
                ['source' => 'datatables-rowreorder', 'target' => 'datatables-plugins/rowreorder'],
                ['source' => 'datatables-scroller', 'target' => 'datatables-plugins/scroller'],
                ['source' => 'datatables-select', 'target' => 'datatables-plugins/select'],
                ['source' => 'pdfmake', 'target' => 'datatables-plugins/pdfmake'],
                ['source' => 'jszip', 'target' => 'datatables-plugins/jszip'],
            ],
        ],
        'daterangepicker' => [
            'name' => 'Date Range Picker',
            'resources' => [
                ['source' => 'daterangepicker'],
                ['source' => 'moment'],
            ],
        ],
        'ekkoLightbox' => [
            'name' => 'Ekko Lightbox',
            'source' => 'ekko-lightbox',
        ],
        'fastclick' => [
            'name' => 'FastClick',
            'source' => 'fastclick',
        ],
        'filterizr' => [
            'name' => 'Filterizr',
            'source' => 'filterizr',
            'ignore' => ['*.d.ts'],
            'recursive' => false,
        ],
        'flagIconCss' => [
            'name' => 'Flag Icon Css',
            'source' => 'flag-icon-css',
        ],
        'flot' => [
            'name' => 'Flot',
            'source' => 'flot',
        ],
        'fullcalendar' => [
            'name' => 'Fullcalendar',
            'source' => 'fullcalendar',
            'ignore' => ['*.d.ts', '*.json', '*.md'],
        ],
        'icheckBootstrap' => [
            'name' => 'iCheck Bootstrap',
            'source' => 'icheck-bootstrap',
            'ignore' => ['*.json', '*.md'],
        ],
        'inputmask' => [
            'name' => 'InputMask',
            'source' => 'inputmask',
        ],
        'ionRangslider' => [
            'name' => 'Ion.RangeSlider',
            'source' => 'ion-rangeslider',
            'ignore' => ['*.json', '*.md', '.editorconfig'],
        ],
        'jqueryKnob' => [
            'name' => 'jQuery Knob',
            'source' => 'jquery-knob',
        ],
        'jqueryMapael' => [
            'name' => 'jQuery Mapael',
            'resources' => [
                ['source' => 'jquery-mapael'],
                ['source' => 'raphael'],
                ['source' => 'jquery-mousewheel'],
            ],
            'ignore' => ['*.json', '*.md', '.editorconfig'],
        ],
        'jqueryUi' => [
            'name' => 'jQuery UI',
            'resources' => [
                ['source' => 'jquery-ui'],
                ['source' => 'jquery-ui/images'],
            ],
            'recursive' => false,
        ],
        'jqueryValidation' => [
            'name' => 'jQuery Validation',
            'source' => 'jquery-validation',
        ],
        'jqvmap' => [
            'name' => 'jQVMap',
            'source' => 'jqvmap',
        ],
        'jsgrid' => [
            'name' => 'jsGrid',
            'resources' => [
                ['source' => 'jsgrid'],
                ['source' => 'jsgrid/i18n'],
            ],
            'recursive' => false,
        ],
        'paceProgress' => [
            'name' => 'Pace Progress',
            'source' => 'pace-progress',
        ],
        'select2' => [
            'name' => 'Select 2 with Bootstrap 4 Theme',
            'resources' => [
                ['source' => 'select2'],
                ['source' => 'select2-bootstrap4-theme'],
            ],
            'ignore' => ['*.json', '*.md'],
        ],
        'sparklines' => [
            'name' => 'Sparklines',
            'source' => 'sparklines',
        ],
        'summernote' => [
            'name' => 'Summernote',
            'source' => 'summernote',
        ],
        'sweetalert2' => [
            'name' => 'Sweetalert 2 with Bootstrap 4 Theme',
            'resources' => [
                ['source' => 'sweetalert2'],
                ['source' => 'sweetalert2-theme-bootstrap-4'],
            ],
        ],
        'tempusdominusBootstrap4' => [
            'name' => 'Tempus Dominus for Bootstrap 4',
            'resources' => [
                ['source' => 'tempusdominus-bootstrap-4'],
                ['source' => 'moment'],
            ],
        ],
        'toastr' => [
            'name' => 'Toastr',
            'source' => 'toastr',
        ],
    ];

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
=======
>>>>>>> 59a8928 (rebase)
    public function __construct() {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
    public function __construct() {
=======
    public function __construct()
    {
>>>>>>> 31d6e3b (first)
=======
    public function __construct() {
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
    public function __construct() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
    public function __construct() {
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
    public function __construct() {
>>>>>>> dfca2a99 (rebase)
        // Fill the basic resource data.

        $this->description = 'The set of AdminLTE additional plugins';
        $this->required = false;

        // Define the base source folder of the plugins.

        $this->source = base_path('vendor/almasaeed2010/adminlte/plugins');

        // Define the base target destination for the plugins.

        $this->target = public_path('vendor');

        // Fill the set of installation messages templates.

        $this->messages = [
<<<<<<< HEAD
<<<<<<< HEAD
            'install' => 'Install the AdminLTE :plugin plugin?',
            'overwrite' => 'The :plugin plugin already exists. Want to replace the plugin?',
            'remove' => 'Do you really want to remove the :plugin plugin?',
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
            'install' => 'Install the AdminLTE :plugin plugin?',
            'overwrite' => 'The :plugin plugin already exists. Want to replace the plugin?',
            'remove' => 'Do you really want to remove the :plugin plugin?',
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
            'install' => 'Install the AdminLTE :plugin plugin?',
            'overwrite' => 'The :plugin plugin already exists. Want to replace the plugin?',
            'remove' => 'Do you really want to remove the :plugin plugin?',
=======
            'install'   => 'Install the AdminLTE :plugin plugin?',
            'overwrite' => 'The :plugin plugin already exists. Want to replace the plugin?',
            'remove'    => 'Do you really want to remove the :plugin plugin?',
>>>>>>> 31d6e3b (first)
=======
            'install' => 'Install the AdminLTE :plugin plugin?',
            'overwrite' => 'The :plugin plugin already exists. Want to replace the plugin?',
            'remove' => 'Do you really want to remove the :plugin plugin?',
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
            'install' => 'Install the AdminLTE :plugin plugin?',
            'overwrite' => 'The :plugin plugin already exists. Want to replace the plugin?',
            'remove' => 'Do you really want to remove the :plugin plugin?',
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
            'install' => 'Install the AdminLTE :plugin plugin?',
            'overwrite' => 'The :plugin plugin already exists. Want to replace the plugin?',
            'remove' => 'Do you really want to remove the :plugin plugin?',
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
            'install' => 'Install the AdminLTE :plugin plugin?',
            'overwrite' => 'The :plugin plugin already exists. Want to replace the plugin?',
            'remove' => 'Do you really want to remove the :plugin plugin?',
>>>>>>> dfca2a99 (rebase)
        ];
    }

    /**
     * Gets the plugins source data.
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
<<<<<<< HEAD
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
>>>>>>> dfca2a99 (rebase)
     * @param string $pluginKey A plugin string key
     *
     * @return array
     */
    public function getSourceData($pluginKey = null) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
=======
=======
>>>>>>> 905478d (rebase)
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
     * @param  string  $pluginKey  A plugin string key
     * @return array
     */
    public function getSourceData($pluginKey = null)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param string $pluginKey A plugin string key
     *
     * @return array
     */
    public function getSourceData($pluginKey = null) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
>>>>>>> dfca2a99 (rebase)
        // Check if we need to get data of a specific AdminLTE plugin.

        if (isset($pluginKey)) {
            return $this->plugins[$pluginKey] ?? null;
        }

        // Otherwise, return all the AdminLTE plugins data.

        return $this->plugins;
    }

    /**
     * Install/Export a plugin.
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
<<<<<<< HEAD
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
>>>>>>> dfca2a99 (rebase)
     * @param string $pluginKey A plugin string key
     *
     * @return void
     */
    public function install($pluginKey = null) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
=======
=======
>>>>>>> 905478d (rebase)
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
     * @param  string  $pluginKey  A plugin string key
     * @return void
     */
    public function install($pluginKey = null)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param string $pluginKey A plugin string key
     *
     * @return void
     */
    public function install($pluginKey = null) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
>>>>>>> dfca2a99 (rebase)
        if (isset($pluginKey) && isset($this->plugins[$pluginKey])) {
            $plugin = $this->preparePlugin($this->plugins[$pluginKey]);
            $this->installPlugin($plugin);
        }
    }

    /**
     * Uninstall/Remove a plugin.
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
<<<<<<< HEAD
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
>>>>>>> dfca2a99 (rebase)
     * @param string $pluginKey A plugin string key
     *
     * @return void
     */
    public function uninstall($pluginKey = null) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
=======
=======
>>>>>>> 905478d (rebase)
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
     * @param  string  $pluginKey  A plugin string key
     * @return void
     */
    public function uninstall($pluginKey = null)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param string $pluginKey A plugin string key
     *
     * @return void
     */
    public function uninstall($pluginKey = null) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
>>>>>>> dfca2a99 (rebase)
        if (isset($pluginKey) && isset($this->plugins[$pluginKey])) {
            $plugin = $this->preparePlugin($this->plugins[$pluginKey]);
            $this->uninstallPlugin($plugin);
        }
    }

    /**
     * Check if a plugin already exists on the target destination.
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
<<<<<<< HEAD
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
>>>>>>> dfca2a99 (rebase)
     * @param string $pluginKey A plugin string key
     *
     * @return bool
     */
    public function exists($pluginKey = null) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
=======
=======
>>>>>>> 905478d (rebase)
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
     * @param  string  $pluginKey  A plugin string key
     * @return bool
     */
    public function exists($pluginKey = null)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param string $pluginKey A plugin string key
     *
     * @return bool
     */
    public function exists($pluginKey = null) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
>>>>>>> dfca2a99 (rebase)
        if (isset($pluginKey) && isset($this->plugins[$pluginKey])) {
            $plugin = $this->preparePlugin($this->plugins[$pluginKey]);

            return $this->pluginExists($plugin);
        }

        return false;
    }

    /**
     * Check if a plugin is correctly installed.
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
<<<<<<< HEAD
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
>>>>>>> dfca2a99 (rebase)
     * @param string $pluginKey A plugin string key
     *
     * @return bool
     */
    public function installed($pluginKey = null) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
=======
=======
>>>>>>> 905478d (rebase)
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
     * @param  string  $pluginKey  A plugin string key
     * @return bool
     */
    public function installed($pluginKey = null)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param string $pluginKey A plugin string key
     *
     * @return bool
     */
    public function installed($pluginKey = null) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
>>>>>>> dfca2a99 (rebase)
        if (isset($pluginKey) && isset($this->plugins[$pluginKey])) {
            $plugin = $this->preparePlugin($this->plugins[$pluginKey]);

            return $this->pluginInstalled($plugin);
        }

        return false;
    }

    /**
     * Prepare a plugin with some sort of normalizations.
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
<<<<<<< HEAD
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
>>>>>>> dfca2a99 (rebase)
     * @param array $plugin An array with the plugin data
     *
     * @return array An array with normalized plugin data
     */
    protected function preparePlugin($plugin) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
=======
=======
>>>>>>> 905478d (rebase)
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
     * @param  array  $plugin  An array with the plugin data
     * @return array An array with normalized plugin data
     */
    protected function preparePlugin($plugin)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param array $plugin An array with the plugin data
     *
     * @return array An array with normalized plugin data
     */
    protected function preparePlugin($plugin) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
>>>>>>> dfca2a99 (rebase)
        // Add source and target when not defined.

        $plugin['source'] = $plugin['source'] ?? '';
        $plugin['target'] = $plugin['target'] ?? $plugin['source'];

        // Add fully qualified paths and default values.

        $DS = \DIRECTORY_SEPARATOR;
        $plugin['source'] = $this->source.$DS.$plugin['source'];
        $plugin['target'] = $this->target.$DS.$plugin['target'];
        $plugin['ignore'] = $plugin['ignore'] ?? [];
        $plugin['recursive'] = $plugin['recursive'] ?? true;

        // Add fully qualified paths and default values on the resources.

        if (isset($plugin['resources'])) {
            foreach ($plugin['resources'] as $key => $res) {
                $res['target'] = $res['target'] ?? $res['source'];
                $res['source'] = $plugin['source'].$DS.$res['source'];
                $res['target'] = $plugin['target'].$DS.$res['target'];
                $res['ignore'] = $res['ignore'] ?? $plugin['ignore'];
                $res['recursive'] = $res['recursive'] ?? $plugin['recursive'];
                $plugin['resources'][$key] = $res;
            }
        }

        // Return normalized plugin data.

        return $plugin;
    }

    /**
     * Install the specified AdminLTE plugin.
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
<<<<<<< HEAD
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
>>>>>>> dfca2a99 (rebase)
     * @param array $plugin An array with the plugin data
     *
     * @return void
     */
    protected function installPlugin($plugin) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
=======
=======
>>>>>>> 905478d (rebase)
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
     * @param  array  $plugin  An array with the plugin data
     * @return void
     */
    protected function installPlugin($plugin)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param array $plugin An array with the plugin data
     *
     * @return void
     */
    protected function installPlugin($plugin) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
>>>>>>> dfca2a99 (rebase)
        // Check if we need to export the entire plugin.

        if (! isset($plugin['resources'])) {
            $this->exportResource($plugin);

            return;
        }

        // Otherwise, export only the specified plugin resources.

        foreach ($plugin['resources'] as $res) {
            $this->exportResource($res);
        }
    }

    /**
     * Exports the specified resource (usually a folder).
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
<<<<<<< HEAD
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
>>>>>>> dfca2a99 (rebase)
     * @param array $res An array with the resource data
     *
     * @return void
     */
    protected function exportResource($res) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
=======
=======
>>>>>>> 905478d (rebase)
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
>>>>>>> dfca2a99 (rebase)
        // Check the resource source type.

        if (is_dir($res['source'])) {
            CommandHelper::copyDirectory(
                $res['source'],
                $res['target'],
                $res['force'] ?? true,
                $res['recursive'] ?? true,
                $res['ignore'] ?? []
            );
        }
    }

    /**
     * Check if the specified plugin already exists on the target destination.
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
<<<<<<< HEAD
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
>>>>>>> dfca2a99 (rebase)
     * @param array $plugin An array with the plugin data
     *
     * @return bool
     */
    protected function pluginExists($plugin) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
=======
=======
>>>>>>> 905478d (rebase)
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
     * @param  array  $plugin  An array with the plugin data
     * @return bool
     */
    protected function pluginExists($plugin)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param array $plugin An array with the plugin data
     *
     * @return bool
     */
    protected function pluginExists($plugin) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
>>>>>>> dfca2a99 (rebase)
        // When the plugin is not a resources list, check if target exists.

        if (! isset($plugin['resources'])) {
            return file_exists($plugin['target']);
        }

        // Otherwise, check if any of the resources already exists.

        foreach ($plugin['resources'] as $res) {
            if (file_exists($res['target'])) {
                return true;
            }
        }

        return false;
    }

    /**
     * Check if the specified plugin is correctly installed.
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
<<<<<<< HEAD
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
>>>>>>> dfca2a99 (rebase)
     * @param array $plugin An array with the plugin data
     *
     * @return bool
     */
    protected function pluginInstalled($plugin) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
=======
=======
>>>>>>> 905478d (rebase)
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
     * @param  array  $plugin  An array with the plugin data
     * @return bool
     */
    protected function pluginInstalled($plugin)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param array $plugin An array with the plugin data
     *
     * @return bool
     */
    protected function pluginInstalled($plugin) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
>>>>>>> dfca2a99 (rebase)
        // When the plugin is not a resources list, check if installed.

        if (! isset($plugin['resources'])) {
            return $this->resourceInstalled($plugin);
        }

        // Otherwise, check if all the resources are installed.

        foreach ($plugin['resources'] as $res) {
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
<<<<<<< HEAD
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
>>>>>>> dfca2a99 (rebase)
     * @param array $res An array with the resource data
     *
     * @return bool
     */
    protected function resourceInstalled($res) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
=======
=======
>>>>>>> 905478d (rebase)
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
>>>>>>> dfca2a99 (rebase)
        $installed = false;

        if (is_dir($res['source'])) {
            $installed = (bool) CommandHelper::compareDirectories(
                $res['source'],
                $res['target'],
                $res['recursive'] ?? true,
                $res['ignore'] ?? []
            );
        }

        return $installed;
    }

    /**
     * Uninstall or remove the specified plugin.
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
<<<<<<< HEAD
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
>>>>>>> dfca2a99 (rebase)
     * @param array $plugin An array with the plugin data
     *
     * @return void
     */
    protected function uninstallPlugin($plugin) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
=======
=======
>>>>>>> 905478d (rebase)
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
     * @param  array  $plugin  An array with the plugin data
     * @return void
     */
    protected function uninstallPlugin($plugin)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param array $plugin An array with the plugin data
     *
     * @return void
     */
    protected function uninstallPlugin($plugin) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
>>>>>>> dfca2a99 (rebase)
        // Check if we need to remove the entire plugin.

        if (! isset($plugin['resources'])) {
            $this->uninstallResource($plugin);

            return;
        }

        // Otherwise, remove only the specified plugin resources.

        foreach ($plugin['resources'] as $res) {
            $this->uninstallResource($res);
        }
    }

    /**
     * Removes the specified resource (usually a folder).
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
<<<<<<< HEAD
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
>>>>>>> dfca2a99 (rebase)
     * @param array $res An array with the resource data
     *
     * @return void
     */
    protected function uninstallResource($res) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
=======
=======
>>>>>>> 905478d (rebase)
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
     * @param  array  $res  An array with the resource data
     * @return void
     */
    protected function uninstallResource($res)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param array $res An array with the resource data
     *
     * @return void
     */
    protected function uninstallResource($res) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
>>>>>>> dfca2a99 (rebase)
        $target = $res['target'];

        if (is_dir($target)) {
            CommandHelper::removeDirectory($target);
        }
    }
}
