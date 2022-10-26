<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

namespace Themes\AdminLTE\Components\Form;

class InputDate extends InputGroupComponent {
=======
namespace Themes\AdminLTE\Components\Form;

class InputDate extends InputGroupComponent
{
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

namespace Themes\AdminLTE\Components\Form;

class InputDate extends InputGroupComponent {
>>>>>>> f405739 (up)
    /**
     * The default set of icons for the Tempus Dominus plugin configuration.
     *
     * @var array
     */
    protected $icons = [
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f405739 (up)
        'time' => 'fas fa-clock',
        'date' => 'fas fa-calendar-alt',
        'up' => 'fas fa-arrow-up',
        'down' => 'fas fa-arrow-down',
<<<<<<< HEAD
        'previous' => 'fas fa-chevron-left',
        'next' => 'fas fa-chevron-right',
        'today' => 'fas fa-calendar-check-o',
        'clear' => 'fas fa-trash',
        'close' => 'fas fa-times',
=======
        'time'     => 'fas fa-clock',
        'date'     => 'fas fa-calendar-alt',
        'up'       => 'fas fa-arrow-up',
        'down'     => 'fas fa-arrow-down',
        'previous' => 'fas fa-chevron-left',
        'next'     => 'fas fa-chevron-right',
        'today'    => 'fas fa-calendar-check-o',
        'clear'    => 'fas fa-trash',
        'close'    => 'fas fa-times',
>>>>>>> 31d6e3b (first)
=======
        'previous' => 'fas fa-chevron-left',
        'next' => 'fas fa-chevron-right',
        'today' => 'fas fa-calendar-check-o',
        'clear' => 'fas fa-trash',
        'close' => 'fas fa-times',
>>>>>>> f405739 (up)
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
     * @return void
     */
    public function __construct(
<<<<<<< HEAD
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
=======
        $name, $id = null, $label = null, $igroupSize = null, $labelClass = null,
        $fgroupClass = null, $igroupClass = null, $disableFeedback = null,
        $errorKey = null, $config = []
    ) {
        parent::__construct(
            $name, $id, $label, $igroupSize, $labelClass, $fgroupClass,
            $igroupClass, $disableFeedback, $errorKey
>>>>>>> 31d6e3b (first)
        );

        $this->config = is_array($config) ? $config : [];

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
<<<<<<< HEAD
<<<<<<< HEAD
    public function makeItemClass() {
=======
    public function makeItemClass()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeItemClass() {
>>>>>>> f405739 (up)
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
        return view('adminlte::components.form.input-date');
    }
}
