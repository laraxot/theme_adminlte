<?php

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
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
declare(strict_types=1);

namespace Themes\AdminLTE\Components\Form;

class DateRange extends InputGroupComponent {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 905478d (rebase)
=======
=======
=======
=======
>>>>>>> 59a8928 (rebase)
namespace Themes\AdminLTE\Components\Form;

class DateRange extends InputGroupComponent
{
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

namespace Themes\AdminLTE\Components\Form;

class DateRange extends InputGroupComponent {
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
=======
>>>>>>> d79d738 (up)
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
    /**
     * The DateRangePicker plugin configuration parameters. Array with
     * key => value pairs, where the key should be an existing configuration
     * property of the plugin.
     *
     * @var array
     */
    public $config;

    /**
     * Enables a default set of ranges option. The string value, if any, will
     * be used as the initial date range. The available values are: 'Today',
     * 'Yesterday', 'Last 7 Days', 'Last 30 Days', 'This Month' or 'Last Month'.
     *
     * @var bool|string
     */
    public $enableDefaultRanges;

    /**
     * Create a new component instance.
     * Note this component requires the 'DateRangePicker' and 'Moment' plugins.
     *
     * @param mixed      $name
     * @param mixed|null $id
     * @param mixed|null $label
     * @param mixed|null $igroupSize
     * @param mixed|null $labelClass
     * @param mixed|null $fgroupClass
     * @param mixed|null $igroupClass
     * @param mixed|null $disableFeedback
     * @param mixed|null $errorKey
     * @param mixed      $config
     * @param mixed|null $enableDefaultRanges
     *
     * @return void
     */
    public function __construct(
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 905478d (rebase)
=======
>>>>>>> d79d738 (up)
        $name,
        $id = null,
        $label = null,
        $igroupSize = null,
        $labelClass = null,
        $fgroupClass = null,
        $igroupClass = null,
        $disableFeedback = null,
        $errorKey = null,
        $config = [],
        $enableDefaultRanges = null
    ) {
        parent::__construct(
            $name,
            $id,
            $label,
            $igroupSize,
            $labelClass,
            $fgroupClass,
            $igroupClass,
            $disableFeedback,
            $errorKey
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        $name, $id = null, $label = null, $igroupSize = null, $labelClass = null,
        $fgroupClass = null, $igroupClass = null, $disableFeedback = null,
        $errorKey = null, $config = [], $enableDefaultRanges = null
    ) {
        parent::__construct(
            $name, $id, $label, $igroupSize, $labelClass, $fgroupClass,
            $igroupClass, $disableFeedback, $errorKey
<<<<<<< HEAD
>>>>>>> 31d6e3b (first)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
=======
>>>>>>> d79d738 (up)
        );

        $this->config = \is_array($config) ? $config : [];
        $this->enableDefaultRanges = $enableDefaultRanges;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
    public function render() {
        /**
         * @phpstan-var view-string
         */
        $view = 'adminlte::components.form.date-range';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
    public function render() {
=======
    public function render() {
=======
    public function render()
    {
>>>>>>> 31d6e3b (first)
=======
    public function render() {
>>>>>>> f405739 (up)
>>>>>>> 59a8928 (rebase)
        return view('adminlte::components.form.date-range');
>>>>>>> f617437 (rebase)
    }
}
