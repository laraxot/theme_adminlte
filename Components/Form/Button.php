<?php

declare(strict_types=1);

namespace Themes\AdminLTE\Components\Form;

use Illuminate\View\Component;

class Button extends Component {
    /**
     * The visible label (text) for the button.
     *
     * @var string
     */
    public $label;

    /**
     * The button type ('button', 'submit', 'reset'). Similar to the html type
     * attribute but with a default value.
     *
     * @var string
     */
    public $type;

    /**
     * The button style theme. One of the available AdminLTE theme: primary,
     * secondary, info, warning, danger, success, dark, etc.
     *
     * @var string
     */
    public $theme;

    /**
     * A fontawesome icon for the button.
     *
     * @var string
     */
    public $icon;

    /**
     * Create a new component instance.
     *
     * @param mixed|null $label
     * @param mixed      $type
     * @param mixed      $theme
     * @param mixed|null $icon
     *
     * @return void
     */
    public function __construct(
        $label = null,
        $type = 'button',
        $theme = 'default',
        $icon = null
    ) {
        $this->label = $label;
        $this->type = $type;
        $this->theme = $theme;
        $this->icon = $icon;
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
        $view = 'adminlte::components.form.button';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }
}
