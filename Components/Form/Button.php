<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

>>>>>>> f405739 (up)
namespace Themes\AdminLTE\Components\Form;

use Illuminate\View\Component;

<<<<<<< HEAD
<<<<<<< HEAD
class Button extends Component {
=======
class Button extends Component
{
>>>>>>> 31d6e3b (first)
=======
class Button extends Component {
>>>>>>> f405739 (up)
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
     * @return void
     */
    public function __construct(
<<<<<<< HEAD
        $label = null,
        $type = 'button',
        $theme = 'default',
        $icon = null
=======
        $label = null, $type = 'button', $theme = 'default', $icon = null
>>>>>>> 31d6e3b (first)
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
        return view('adminlte::components.form.button');
    }
}
