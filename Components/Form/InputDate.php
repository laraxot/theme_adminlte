<?php

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
>>>>>>> 905478d7 (rebase)
=======
>>>>>>> d79d738c (up)
declare(strict_types=1);

namespace Themes\AdminLTE\Components\Form;

class InputDate extends InputGroupComponent {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 905478d7 (rebase)
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
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
=======
>>>>>>> d79d738c (up)
    /**
     * The default set of icons for the Tempus Dominus plugin configuration.
     *
     * @var array
     */
    protected $icons = [
<<<<<<< HEAD
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
>>>>>>> 905478d7 (rebase)
=======
>>>>>>> d79d738c (up)
        'time' => 'fas fa-clock',
        'date' => 'fas fa-calendar-alt',
        'up' => 'fas fa-arrow-up',
        'down' => 'fas fa-arrow-down',
        'previous' => 'fas fa-chevron-left',
        'next' => 'fas fa-chevron-right',
        'today' => 'fas fa-calendar-check-o',
        'clear' => 'fas fa-trash',
        'close' => 'fas fa-times',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 905478d7 (rebase)
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
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
=======
>>>>>>> d79d738c (up)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 905478d7 (rebase)
=======
>>>>>>> d79d738c (up)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        $name, $id = null, $label = null, $igroupSize = null, $labelClass = null,
        $fgroupClass = null, $igroupClass = null, $disableFeedback = null,
        $errorKey = null, $config = []
    ) {
        parent::__construct(
            $name, $id, $label, $igroupSize, $labelClass, $fgroupClass,
            $igroupClass, $disableFeedback, $errorKey
<<<<<<< HEAD
>>>>>>> 31d6e3b (first)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
=======
>>>>>>> d79d738c (up)
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
<<<<<<< HEAD
<<<<<<< HEAD
    public function makeItemClass() {
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
    public function makeItemClass() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
=======
    public function makeItemClass() {
>>>>>>> d79d738c (up)
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
        /**
         * @phpstan-var view-string
         */
        $view = 'adminlte::components.form.input-date';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d79d738c (up)
    public function render() {
        return view('adminlte::components.form.input-date');
>>>>>>> f617437 (rebase)
    }
}
