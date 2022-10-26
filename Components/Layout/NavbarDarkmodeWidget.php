<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
namespace Themes\AdminLTE\Components\Layout;

use Illuminate\View\Component;
use Themes\AdminLTE\Http\Controllers\DarkModeController;

<<<<<<< HEAD
class NavbarDarkmodeWidget extends Component {
=======
class NavbarDarkmodeWidget extends Component
{
>>>>>>> 31d6e3b (first)
    /**
     * The Font Awesome icon to use when dark mode is disabled.
     *
     * @var string
     */
    public $iconDisabled = 'far fa-moon';

    /**
     * The Font Awesome icon to use when dark mode is enabled.
     *
     * @var string
     */
    public $iconEnabled = 'fas fa-moon';

    /**
     * The AdminLTE color to use for the icon when dark mode is disabled.
     *
     * @var string
     */
    public $colorDisabled;

    /**
     * The AdminLTE color to use for the icon when dark mode is enabled.
     *
     * @var string
     */
    public $colorEnabled;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
<<<<<<< HEAD
        $iconDisabled = null,
        $iconEnabled = null,
        $colorDisabled = null,
        $colorEnabled = null
=======
        $iconDisabled = null, $iconEnabled = null,
        $colorDisabled = null, $colorEnabled = null
>>>>>>> 31d6e3b (first)
    ) {
        // Setup the icon to use when dark mode is disabled.

        if (! empty($iconDisabled)) {
            $this->iconDisabled = $iconDisabled;
        }

        // Setup the icon to use when dark mode is enabled.

        if (! empty($iconEnabled)) {
            $this->iconEnabled = $iconEnabled;
        }

        // Setup the icon colors.

        $this->colorDisabled = $colorDisabled;
        $this->colorEnabled = $colorEnabled;
    }

    /**
     * Make the class attribute for the dark mode widget icon.
     *
     * @return string
     */
<<<<<<< HEAD
    public function makeIconClass() {
=======
    public function makeIconClass()
    {
>>>>>>> 31d6e3b (first)
        // Use the controller to check if dark mode is enabled.

        if ((new DarkModeController())->isEnabled()) {
            $classes = $this->makeIconEnabledClass();
        } else {
            $classes = $this->makeIconDisabledClass();
        }

        // Return the icon classes.

        return implode(' ', $classes);
    }

    /**
     * Make the class attribute for the icon when dark mode is disabled.
     *
     * @return array
     */
<<<<<<< HEAD
    public function makeIconDisabledClass() {
=======
    public function makeIconDisabledClass()
    {
>>>>>>> 31d6e3b (first)
        $classes = explode(' ', $this->iconDisabled);

        if (! empty($this->colorDisabled)) {
            $classes[] = "text-{$this->colorDisabled}";
        }

        // Return the icon classes.

        return $classes;
    }

    /**
     * Make the class attribute for the icon when dark mode is enabled.
     *
     * @return array
     */
<<<<<<< HEAD
    public function makeIconEnabledClass() {
=======
    public function makeIconEnabledClass()
    {
>>>>>>> 31d6e3b (first)
        $classes = explode(' ', $this->iconEnabled);

        if (! empty($this->colorEnabled)) {
            $classes[] = "text-{$this->colorEnabled}";
        }

        // Return the icon classes.

        return $classes;
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
        return view('adminlte::components.layout.navbar-darkmode-widget');
    }
}
