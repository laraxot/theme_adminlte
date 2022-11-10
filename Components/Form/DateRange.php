<?php

declare(strict_types=1);

namespace Themes\KlekooAdm\Components\Form;

class DateRange extends InputGroupComponent {
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
        );

        $this->config = \is_array($config) ? $config : [];
        $this->enableDefaultRanges = $enableDefaultRanges;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render() {
        /**
         * @phpstan-var view-string
         */
        $view = 'adminlte::components.form.date-range';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }
}
