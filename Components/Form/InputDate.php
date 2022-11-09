<?php

declare(strict_types=1);

namespace Themes\KlekooAdm\Components\Form;

class InputDate extends InputGroupComponent {
    /**
     * The default set of icons for the Tempus Dominus plugin configuration.
     *
     * @var array
     */
    protected $icons = [
        'time' => 'fas fa-clock',
        'date' => 'fas fa-calendar-alt',
        'up' => 'fas fa-arrow-up',
        'down' => 'fas fa-arrow-down',
        'previous' => 'fas fa-chevron-left',
        'next' => 'fas fa-chevron-right',
        'today' => 'fas fa-calendar-check-o',
        'clear' => 'fas fa-trash',
        'close' => 'fas fa-times',
    ];

    /**
     * The default set of buttons for the Tempus Dominus plugin configuration.
     *
     * @var array
     */
    protected $buttons = [
        'showClose' => true,
    ];

    /**
     * The Tempus Dominus plugin configuration parameters. Array with
     * key => value pairs, where the key should be an existing configuration
     * property of the plugin.
     *
     * @var array
     */
    public $config;

    /**
     * Create a new component instance.
     * Note this component requires the 'Tempus Dominus' plugin.
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
        $config = []
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

        // Setup the default plugin icons option.

        $this->config['icons'] = $this->config['icons'] ?? $this->icons;

        // Setup the default plugin buttons option.

        $this->config['buttons'] = $this->config['buttons'] ?? $this->buttons;
    }

    /**
     * Make the class attribute for the input group item.
     *
     * @return string
     */
    public function makeItemClass() {
        $classes = ['form-control', 'datetimepicker'];

        if ($this->isInvalid() && ! isset($this->disableFeedback)) {
            $classes[] = 'is-invalid';
        }

        return implode(' ', $classes);
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
        $view = 'adminlte::components.form.input-date';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }
}
