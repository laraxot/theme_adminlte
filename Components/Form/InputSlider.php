<?php

declare(strict_types=1);

namespace Themes\AdminLTE\Components\Form;

class InputSlider extends InputGroupComponent {
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
    public function makeInputGroupClass() {
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
    public function render() {
        /**
         * @phpstan-var view-string
         */
        $view = 'adminlte::components.form.input-slider';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }
}
