<?php

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> cf3e396 (rebase)
declare(strict_types=1);

<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
declare(strict_types=1);

>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
>>>>>>> cf4e5c1 (rebase)
=======
=======
declare(strict_types=1);

>>>>>>> d79d738 (up)
>>>>>>> cf3e396 (rebase)
namespace Themes\AdminLTE\Components\Form;

use Illuminate\View\Component;

<<<<<<< HEAD
class Button extends Component {
=======
<<<<<<< HEAD
<<<<<<< HEAD
class Button extends Component {
=======
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
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
class Button extends Component {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
=======
class Button extends Component {
>>>>>>> d79d738 (up)
>>>>>>> cf3e396 (rebase)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 905478d (rebase)
=======
>>>>>>> d79d738 (up)
>>>>>>> cf3e396 (rebase)
        $label = null,
        $type = 'button',
        $theme = 'default',
        $icon = null
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
        $label = null, $type = 'button', $theme = 'default', $icon = null
>>>>>>> 31d6e3b (first)
=======
        $label = null, $type = 'button', $theme = 'default', $icon = null
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
=======
>>>>>>> d79d738 (up)
>>>>>>> cf3e396 (rebase)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> cf3e396 (rebase)
    public function render() {
        /**
         * @phpstan-var view-string
         */
        $view = 'adminlte::components.form.button';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
    public function render() {
        return view('adminlte::components.form.button');
>>>>>>> f617437 (rebase)
>>>>>>> cf3e396 (rebase)
    }
}
