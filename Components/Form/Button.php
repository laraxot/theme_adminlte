<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

>>>>>>> f405739 (up)
=======
declare(strict_types=1);

>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
namespace Themes\AdminLTE\Components\Form;
=======
namespace Themes\KlekooAdm\Components\Form;
>>>>>>> b738e1c (rebase)
=======
namespace Themes\AdminLTE\Components\Form;
>>>>>>> 63c2c43 (up)

use Illuminate\View\Component;

<<<<<<< HEAD
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
=======
class Button extends Component {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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
<<<<<<< HEAD
        $label = null,
        $type = 'button',
        $theme = 'default',
        $icon = null
=======
        $label = null, $type = 'button', $theme = 'default', $icon = null
>>>>>>> 31d6e3b (first)
=======
        $label = null, $type = 'button', $theme = 'default', $icon = null
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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
        return view('adminlte::components.form.button');
    }
}
