<?php

<<<<<<< HEAD
declare(strict_types=1);

namespace Themes\AdminLTE\Components\Form;

class TextEditor extends InputGroupComponent {
=======
namespace Themes\AdminLTE\Components\Form;

class TextEditor extends InputGroupComponent
{
>>>>>>> 31d6e3b (first)
    /**
     * The Summernote plugin configuration parameters. Array with key => value
     * pairs, where the key should be an existing configuration property of
     * the plugin.
     *
     * @var array
     */
    public $config;

    /**
     * Create a new component instance.
     * Note this component requires the 'Summernote' plugin.
     * TODO: the append/prepend addon slots are not supported.
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

        // Setup the default plugin width option.

        $this->config['width'] = $this->config['width'] ?? 'inherit';
    }

    /**
     * Make the class attribute for the "input-group" element. Note we overwrite
     * the method of the parent class.
     *
     * @return string
     */
<<<<<<< HEAD
    public function makeInputGroupClass() {
=======
    public function makeInputGroupClass()
    {
>>>>>>> 31d6e3b (first)
        $classes = ['input-group'];

        if (isset($this->size) && in_array($this->size, ['sm', 'lg'])) {
            $classes[] = "input-group-{$this->size}";
        }

        if ($this->isInvalid() && ! isset($this->disableFeedback)) {
            $classes[] = 'adminlte-invalid-itegroup';
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
    public function render() {
=======
    public function render()
    {
>>>>>>> 31d6e3b (first)
        return view('adminlte::components.form.text-editor');
    }
}
