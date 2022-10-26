<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
declare(strict_types=1);

namespace Themes\AdminLTE\Components\Form;

class InputSlider extends InputGroupComponent {
<<<<<<< HEAD
=======
namespace Themes\AdminLTE\Components\Form;

class InputSlider extends InputGroupComponent
{
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

namespace Themes\AdminLTE\Components\Form;

class InputSlider extends InputGroupComponent {
>>>>>>> f405739 (up)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
    /**
     * The bootstrap-slider plugin configuration parameters. Array with
     * key => value pairs, where the key should be an existing configuration
     * property of the plugin.
     *
     * @var array
     */
    public $config;

    /**
     * The slider color. One of the available html colors.
     *
     * @var string
     */
    public $color;

    /**
     * Create a new component instance.
     * Note this component requires the 'bootstrap-slider' plugin.
     *
     * @return void
     */
    public function __construct(
<<<<<<< HEAD
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
        $config = [],
        $color = null
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
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        $name, $id = null, $label = null, $igroupSize = null, $labelClass = null,
        $fgroupClass = null, $igroupClass = null, $disableFeedback = null,
        $errorKey = null, $config = [], $color = null
    ) {
        parent::__construct(
            $name, $id, $label, $igroupSize, $labelClass, $fgroupClass,
            $igroupClass, $disableFeedback, $errorKey
<<<<<<< HEAD
>>>>>>> 31d6e3b (first)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        );

        $this->config = is_array($config) ? $config : [];
        $this->color = $color;

        // Set a default plugin 'id' option.

        $this->config['id'] = $this->config['id'] ?? "{$this->id}-slider";
    }

    /**
     * Make the class attribute for the "input-group" element. Note we overwrite
     * the method of the parent class.
     *
     * @return string
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function makeInputGroupClass() {
=======
    public function makeInputGroupClass()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeInputGroupClass() {
>>>>>>> f405739 (up)
=======
    public function makeInputGroupClass() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        $classes = ['input-group'];

        if (isset($this->size) && in_array($this->size, ['sm', 'lg'])) {
            $classes[] = "input-group-{$this->size}";
        }

        if ($this->isInvalid() && ! isset($this->disableFeedback)) {
            $classes[] = 'adminlte-invalid-islgroup';
        }

        if (isset($this->igroupClass)) {
            $classes[] = $this->igroupClass;
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
        return view('adminlte::components.form.input-slider');
    }
}
