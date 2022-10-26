<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

<<<<<<< HEAD
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
namespace Themes\AdminLTE\Components\Layout;
=======
namespace Themes\KlekooAdm\Components\Layout;
>>>>>>> b738e1c (rebase)
=======
namespace Themes\AdminLTE\Components\Layout;
>>>>>>> 63c2c43 (up)
=======
namespace Themes\KlekooAdm\Components\Layout;
>>>>>>> 8a5cc0b (.)

use Illuminate\View\Component;
use Themes\KlekooAdm\Http\Controllers\DarkModeController;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
class NavbarDarkmodeWidget extends Component {
=======
class NavbarDarkmodeWidget extends Component
{
>>>>>>> 31d6e3b (first)
=======
class NavbarDarkmodeWidget extends Component {
>>>>>>> f405739 (up)
=======
class NavbarDarkmodeWidget extends Component {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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
<<<<<<< HEAD
        $iconDisabled = null,
        $iconEnabled = null,
        $colorDisabled = null,
        $colorEnabled = null
=======
        $iconDisabled = null, $iconEnabled = null,
        $colorDisabled = null, $colorEnabled = null
>>>>>>> 31d6e3b (first)
=======
        $iconDisabled = null, $iconEnabled = null,
        $colorDisabled = null, $colorEnabled = null
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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
<<<<<<< HEAD
<<<<<<< HEAD
    public function makeIconClass() {
=======
    public function makeIconClass()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeIconClass() {
>>>>>>> f405739 (up)
=======
    public function makeIconClass() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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
<<<<<<< HEAD
<<<<<<< HEAD
    public function makeIconDisabledClass() {
=======
    public function makeIconDisabledClass()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeIconDisabledClass() {
>>>>>>> f405739 (up)
=======
    public function makeIconDisabledClass() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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
<<<<<<< HEAD
<<<<<<< HEAD
    public function makeIconEnabledClass() {
=======
    public function makeIconEnabledClass()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeIconEnabledClass() {
>>>>>>> f405739 (up)
=======
    public function makeIconEnabledClass() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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
        return view('adminlte::components.layout.navbar-darkmode-widget');
    }
}
