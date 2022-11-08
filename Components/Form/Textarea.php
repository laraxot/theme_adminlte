<?php

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
declare(strict_types=1);

namespace Themes\AdminLTE\Components\Form;

class Textarea extends InputGroupComponent {
<<<<<<< HEAD
=======
=======
namespace Themes\AdminLTE\Components\Form;

class Textarea extends InputGroupComponent
{
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

namespace Themes\AdminLTE\Components\Form;

class Textarea extends InputGroupComponent {
>>>>>>> f405739 (up)
>>>>>>> f617437 (rebase)
    /**
     * Create a new component instance.
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
        $errorKey = null
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
        $view = 'adminlte::components.form.textarea';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
=======
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
        return view('adminlte::components.form.textarea');
>>>>>>> f617437 (rebase)
    }
}
