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

class InputSlider extends InputGroupComponent {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 905478d7 (rebase)
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
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
=======
>>>>>>> d79d738c (up)
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
     * @param mixed|null $color
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
>>>>>>> 905478d7 (rebase)
=======
>>>>>>> d79d738c (up)
        );

        $this->config = \is_array($config) ? $config : [];
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
    public function makeInputGroupClass() {
=======
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
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
    public function makeInputGroupClass() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
=======
    public function makeInputGroupClass() {
>>>>>>> d79d738c (up)
        $classes = ['input-group'];

        if (isset($this->size) && \in_array($this->size, ['sm', 'lg'], true)) {
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
    public function render() {
        /**
         * @phpstan-var view-string
         */
        $view = 'adminlte::components.form.input-slider';
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
        return view('adminlte::components.form.input-slider');
>>>>>>> f617437 (rebase)
    }
}
