<?php

declare(strict_types=1);

namespace Themes\AdminLTE\Components\Form;

class Select2 extends InputGroupComponent {
    /**
     * The select2 plugin configuration parameters. Array with key => value
     * pairs, where the key should be an existing configuration property of
     * the select2 plugin.
     *
     * @var array
     */
    public $config;

    /**
     * Create a new component instance.
     * Note this component requires the 'select2' plugin and the 'bootstrap4'
     * css theme.
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
        $this->config['theme'] = 'bootstrap4';
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
        $view = 'adminlte::components.form.select2';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }
}
