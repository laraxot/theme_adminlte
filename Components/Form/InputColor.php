<?php

<<<<<<< HEAD
declare(strict_types=1);

namespace Themes\AdminLTE\Components\Form;

class InputColor extends InputGroupComponent {
=======
namespace Themes\AdminLTE\Components\Form;

class InputColor extends InputGroupComponent
{
>>>>>>> 31d6e3b (first)
    /**
     * The Bootstrap Colorpicker plugin configuration parameters. Array with
     * key => value pairs, where the key should be an existing configuration
     * property of the plugin.
     *
     * @var array
     */
    public $config;

    /**
     * Create a new component instance.
     * Note this component requires the 'Bootstrap Colorpicker' plugin.
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
        return view('adminlte::components.form.input-color');
    }
}
