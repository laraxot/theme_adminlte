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
namespace Themes\AdminLTE\Components\Tool;
=======
namespace Themes\KlekooAdm\Components\Tool;
>>>>>>> b738e1c (rebase)
=======
namespace Themes\AdminLTE\Components\Tool;
>>>>>>> 63c2c43 (up)

use Illuminate\View\Component;

<<<<<<< HEAD
class Datatable extends Component {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
class Datatable extends Component {
=======
class Datatable extends Component
{
>>>>>>> 31d6e3b (first)
=======
class Datatable extends Component {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
class Datatable extends Component {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
    /**
     * The table identification (id) attribute. Required in order to manage
     * the internal or external (JS) initialization.
     *
     * @var string
     */
    public $id;

    /**
     * An array with the set of headers (titles) for the table columns. Each
     * header can be a string or an array with next properties: label, width
     * and no-export.
     *
     * @var array
     */
    public $heads;

    /**
     * The table theme (light, dark, primary, secondary, info, warning or
     * danger).
     *
     * @var string
     */
    public $theme;

    /**
     * The table head theme (light or dark).
     *
     * @var string
     */
    public $headTheme;

    /**
     * The datatables plugin configuration parameters. Array with key => value
     * pairs, where the key should be an existing configuration property of
     * the datatables plugin.
     *
     * @var array
     */
    public $config;

    /**
     * Enables a footer with header cells. The footer can be fully customized
     * using the 'footerCallback' option of the plugin.
     *
     * @var mixed
     */
    public $withFooter;

    /**
     * The table footer theme (light or dark).
     *
     * @var string
     */
    public $footerTheme;

    /**
     * When enabled, borders will be displayed around the table.
     *
     * @var mixed
     */
    public $bordered;

    /**
     * When enabled, a hover effect will be available for the table rows.
     *
     * @var mixed
     */
    public $hoverable;

    /**
     * When enabled, a striped effect will be available for the table rows.
     *
     * @var mixed
     */
    public $striped;

    /**
     * When enabled, the table will be compressed using less white space between
     * cells and rows.
     *
     * @var mixed
     */
    public $compressed;

    /**
     * When enabled, the table cells will be vertically and horizontally
     * centered.
     *
     * @var mixed
     */
    public $beautify;

    /**
     * When enabled, a set of tool buttons for export the table will be
     * displayed.
     *
     * @var mixed
     */
    public $withButtons;

    /**
     * Create a new component instance.
     *
     * @param mixed      $id
     * @param mixed      $heads
     * @param mixed|null $theme
     * @param mixed|null $headTheme
     * @param mixed|null $bordered
     * @param mixed|null $hoverable
     * @param mixed|null $striped
     * @param mixed|null $compressed
     * @param mixed|null $withFooter
     * @param mixed|null $footerTheme
     * @param mixed|null $beautify
     * @param mixed|null $withButtons
     * @param mixed      $config
     *
     * @return void
     */
    public function __construct(
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 905478d (rebase)
        $id,
        $heads,
        $theme = null,
        $headTheme = null,
        $bordered = null,
        $hoverable = null,
        $striped = null,
        $compressed = null,
        $withFooter = null,
        $footerTheme = null,
        $beautify = null,
        $withButtons = null,
        $config = []
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        $id, $heads, $theme = null, $headTheme = null, $bordered = null,
        $hoverable = null, $striped = null, $compressed = null,
        $withFooter = null, $footerTheme = null, $beautify = null,
        $withButtons = null, $config = []
<<<<<<< HEAD
>>>>>>> 31d6e3b (first)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
    ) {
        $this->id = $id;
        $this->heads = $heads;
        $this->theme = $theme;
        $this->headTheme = $headTheme;
        $this->bordered = $bordered;
        $this->hoverable = $hoverable;
        $this->striped = $striped;
        $this->compressed = $compressed;
        $this->withFooter = $withFooter;
        $this->footerTheme = $footerTheme;
        $this->beautify = $beautify;
        $this->withButtons = $withButtons;

        $this->config = \is_array($config) ? $config : [];

        // When buttons are enabled, change the default table layout.

        if (isset($withButtons) && ! isset($this->config['dom'])) {
            $this->config['dom'] = $this->makeDomCfg();
        }

        // When buttons are enabled, setup the set of visible buttons and they
        // default style.

        if (isset($withButtons) && ! isset($this->config['buttons'])) {
            $this->config['buttons'] = $this->makeButtonsCfg();
        }
    }

    /**
     * Make the table class.
     *
     * @return string
     */
<<<<<<< HEAD
    public function makeTableClass() {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function makeTableClass() {
=======
    public function makeTableClass()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeTableClass() {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
    public function makeTableClass() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
        $classes = ['table'];

        if (isset($this->bordered)) {
            $classes[] = 'table-bordered';
        }

        if (isset($this->hoverable)) {
            $classes[] = 'table-hover';
        }

        if (isset($this->striped)) {
            $classes[] = 'table-striped';
        }

        if (isset($this->compressed)) {
            $classes[] = 'table-sm';
        }

        if (isset($this->theme)) {
            $classes[] = "table-{$this->theme}";
        }

        return implode(' ', $classes);
    }

    /**
     * Make the Datatables 'dom' configuration with the buttons extension.
     *
     * @return string
     */
<<<<<<< HEAD
    protected function makeDomCfg() {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected function makeDomCfg() {
=======
    protected function makeDomCfg()
    {
>>>>>>> 31d6e3b (first)
=======
    protected function makeDomCfg() {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
    protected function makeDomCfg() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
        // Give bootstrap style to table elements.
        // The built-in table control elements in DataTables are:
        // l - Length changing input control.
        // f - Filtering input.
        // t - The table!
        // i - Table information summary.
        // p - Pagination control.
        // r - Processing display element.
        // B - buttons extension.

        return '<"row" <"col-sm-6" B> <"col-sm-6" f> >
                <"row" <"col-12" tr> >
                <"row" <"col-sm-5" i> <"col-sm-7" p> >';
    }

    /**
     * Make the Datatables 'buttons' configuration object to define the set of
     * visible buttons and they style.
     *
     * @return array
     */
<<<<<<< HEAD
    protected function makeButtonsCfg() {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected function makeButtonsCfg() {
=======
    protected function makeButtonsCfg()
    {
>>>>>>> 31d6e3b (first)
=======
    protected function makeButtonsCfg() {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
    protected function makeButtonsCfg() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
        // Configure the export columns selector. We are not going to export
        // columns that explicitly have the 'dt-no-export' attribute.

        $colSelector = ':not([dt-no-export])';

        // Button to change the page length of tables.

        $lengthBtn = [
            'extend' => 'pageLength',
            'className' => 'btn-default',
        ];

        // Button to print the data.

        $printBtn = [
            'extend' => 'print',
            'className' => 'btn-default',
            'text' => '<i class="fas fa-fw fa-lg fa-print"></i>',
            'titleAttr' => 'Print',
            'exportOptions' => ['columns' => $colSelector],
        ];

        // Button to export data to CSV file.

        $csvBtn = [
            'extend' => 'csv',
            'className' => 'btn-default',
            'text' => '<i class="fas fa-fw fa-lg fa-file-csv text-primary"></i>',
            'titleAttr' => 'Export to CSV',
            'exportOptions' => ['columns' => $colSelector],
        ];

        // Button to export data to Excel file.

        $excelBtn = [
            'extend' => 'excel',
            'className' => 'btn-default',
            'text' => '<i class="fas fa-fw fa-lg fa-file-excel text-success"></i>',
            'titleAttr' => 'Export to Excel',
            'exportOptions' => ['columns' => $colSelector],
        ];

        // Button to export data to PDF file.

        $pdfBtn = [
            'extend' => 'pdf',
            'className' => 'btn-default',
            'text' => '<i class="fas fa-fw fa-lg fa-file-pdf text-danger"></i>',
            'titleAttr' => 'Export to PDF',
            'exportOptions' => ['columns' => $colSelector],
        ];

        // Return the set of configured buttons.

        return [
            'dom' => ['button' => ['className' => 'btn']],
            'buttons' => [$lengthBtn, $printBtn, $csvBtn, $excelBtn, $pdfBtn],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
<<<<<<< HEAD
    public function render() {
        /**
         * @phpstan-var view-string
         */
        $view = 'adminlte::components.tool.datatable';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function render() {
=======
    public function render()
    {
>>>>>>> 31d6e3b (first)
=======
    public function render() {
>>>>>>> f405739 (up)
=======
    public function render() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        return view('adminlte::components.tool.datatable');
>>>>>>> f617437 (rebase)
    }
}
