<?php

<<<<<<< HEAD
declare(strict_types=1);

namespace Themes\AdminLTE\Components\Form;

class InputFile extends InputGroupComponent {
=======
namespace Themes\AdminLTE\Components\Form;

class InputFile extends InputGroupComponent
{
>>>>>>> 31d6e3b (first)
    /**
     * The placeholder for the input file box.
     *
     * @var string
     */
    public $placeholder;

    /**
     * A legend for replace the default 'Browse' text.
     *
     * @var string
     */
    public $legend;

    /**
     * Create a new component instance.
     * Note this component requires the 'bs-custom-input-file' plugin.
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
        $placeholder = '',
        $legend = null
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
        $errorKey = null, $placeholder = '', $legend = null
    ) {
        parent::__construct(
            $name, $id, $label, $igroupSize, $labelClass, $fgroupClass,
            $igroupClass, $disableFeedback, $errorKey
>>>>>>> 31d6e3b (first)
        );

        $this->legend = $legend;
        $this->placeholder = $placeholder;
    }

    /**
     * Make the class attribute for the input group item.
     *
     * @return string
     */
<<<<<<< HEAD
    public function makeItemClass() {
=======
    public function makeItemClass()
    {
>>>>>>> 31d6e3b (first)
        $classes = ['custom-file-input'];

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
    public function render() {
=======
    public function render()
    {
>>>>>>> 31d6e3b (first)
        return view('adminlte::components.form.input-file');
    }
}
