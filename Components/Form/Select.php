<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

namespace Themes\AdminLTE\Components\Form;

class Select extends InputGroupComponent {
=======
namespace Themes\AdminLTE\Components\Form;

class Select extends InputGroupComponent
{
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

namespace Themes\AdminLTE\Components\Form;

class Select extends InputGroupComponent {
>>>>>>> f405739 (up)
    /**
     * Create a new component instance.
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
=======
        $name, $id = null, $label = null, $igroupSize = null, $labelClass = null,
        $fgroupClass = null, $igroupClass = null, $disableFeedback = null,
        $errorKey = null
    ) {
        parent::__construct(
            $name, $id, $label, $igroupSize, $labelClass, $fgroupClass,
            $igroupClass, $disableFeedback, $errorKey
>>>>>>> 31d6e3b (first)
        );
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
        return view('adminlte::components.form.select');
    }
}
