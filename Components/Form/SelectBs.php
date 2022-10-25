<?php

declare(strict_types=1);

namespace Themes\AdminLTE\Components\Form;

class SelectBs extends InputGroupComponent {
    /**
     * The bootstrap-select plugin configuration parameters. Array with
     * key => value pairs, where the key should be an existing configuration
     * property of the bootstrap-select plugin.
     *
     * @var array
     */
    public $config;

    /**
     * Create a new component instance.
     * Note this component requires the 'bootstrap-select' plugin.
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
        );

        $this->config = \is_array($config) ? $config : [];
    }

    /**
     * Make the class attribute for the input group item.
     *
     * @return string
     */
    public function makeItemClass() {
        $classes = ['form-control'];

        if ($this->isInvalid() && ! isset($this->disableFeedback)) {
            $classes[] = 'is-invalid';
        }

        // The next workaround setups the plugin when using sm/lg sizes.
        // Note: this may change with newer plugin versions.

        if (isset($this->size) && \in_array($this->size, ['sm', 'lg'], true)) {
            $classes[] = "form-control-{$this->size}";
            $classes[] = 'p-0';
        }

        return implode(' ', $classes);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render() {
        return view('adminlte::components.form.select-bs');
    }
}
