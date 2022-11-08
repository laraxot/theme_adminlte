<?php

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
declare(strict_types=1);

namespace Themes\KlekooAdm\Components\Form;

class InputFile extends InputGroupComponent {
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 905478d (rebase)
=======
namespace Themes\AdminLTE\Components\Form;

class InputFile extends InputGroupComponent
{
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

namespace Themes\AdminLTE\Components\Form;

class InputFile extends InputGroupComponent {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
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
     * @param mixed      $name
     * @param mixed|null $id
     * @param mixed|null $label
     * @param mixed|null $igroupSize
     * @param mixed|null $labelClass
     * @param mixed|null $fgroupClass
     * @param mixed|null $igroupClass
     * @param mixed|null $disableFeedback
     * @param mixed|null $errorKey
     * @param mixed      $placeholder
     * @param mixed|null $legend
     *
     * @return void
     */
    public function __construct(
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 905478d (rebase)
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
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        $name, $id = null, $label = null, $igroupSize = null, $labelClass = null,
        $fgroupClass = null, $igroupClass = null, $disableFeedback = null,
        $errorKey = null, $placeholder = '', $legend = null
    ) {
        parent::__construct(
            $name, $id, $label, $igroupSize, $labelClass, $fgroupClass,
            $igroupClass, $disableFeedback, $errorKey
<<<<<<< HEAD
>>>>>>> 31d6e3b (first)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
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
>>>>>>> 905478d (rebase)
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
        /**
         * @phpstan-var view-string
         */
        $view = 'adminlte::components.form.input-file';
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
        return view('adminlte::components.form.input-file');
>>>>>>> f617437 (rebase)
    }
}
