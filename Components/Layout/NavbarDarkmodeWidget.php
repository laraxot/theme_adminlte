<?php

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> 59a8928 (rebase)
>>>>>>> 655502de (rebase)
declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 4a726e2 (rebase)
=======
>>>>>>> f63434d (rebase)
=======
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
declare(strict_types=1);

>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 312af933 (rebase)
=======
=======
>>>>>>> a159d289 (rebase)
=======
declare(strict_types=1);

>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
declare(strict_types=1);

>>>>>>> dfca2a99 (rebase)
=======
>>>>>>> 543f78f7 (rebase)
namespace Themes\AdminLTE\Components\Layout;
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
<<<<<<< HEAD
>>>>>>> b6bf7b3 (rebase)
=======
=======
namespace Themes\AdminLTE\Components\Layout;
>>>>>>> 5b4054a (.)
>>>>>>> 4ab624f (rebase)

use Illuminate\View\Component;
use Themes\AdminLTE\Http\Controllers\DarkModeController;

<<<<<<< HEAD
<<<<<<< HEAD
class NavbarDarkmodeWidget extends Component {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
class NavbarDarkmodeWidget extends Component {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
class NavbarDarkmodeWidget extends Component {
=======
class NavbarDarkmodeWidget extends Component
{
>>>>>>> 31d6e3b (first)
=======
class NavbarDarkmodeWidget extends Component {
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
class NavbarDarkmodeWidget extends Component {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
class NavbarDarkmodeWidget extends Component {
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
class NavbarDarkmodeWidget extends Component {
>>>>>>> dfca2a99 (rebase)
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
     * @param mixed|null $iconDisabled
     * @param mixed|null $iconEnabled
     * @param mixed|null $colorDisabled
     * @param mixed|null $colorEnabled
     *
     * @return void
     */
    public function __construct(
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
>>>>>>> dfca2a99 (rebase)
        $iconDisabled = null,
        $iconEnabled = null,
        $colorDisabled = null,
        $colorEnabled = null
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
=======
=======
        $iconDisabled = null, $iconEnabled = null,
        $colorDisabled = null, $colorEnabled = null
>>>>>>> 31d6e3b (first)
=======
        $iconDisabled = null, $iconEnabled = null,
        $colorDisabled = null, $colorEnabled = null
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
>>>>>>> dfca2a99 (rebase)
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
    public function makeIconClass() {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
    public function makeIconClass() {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
    public function makeIconClass() {
=======
    public function makeIconClass()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeIconClass() {
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
    public function makeIconClass() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
    public function makeIconClass() {
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
    public function makeIconClass() {
>>>>>>> dfca2a99 (rebase)
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
    public function makeIconDisabledClass() {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
    public function makeIconDisabledClass() {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
    public function makeIconDisabledClass() {
=======
    public function makeIconDisabledClass()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeIconDisabledClass() {
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
    public function makeIconDisabledClass() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
    public function makeIconDisabledClass() {
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
    public function makeIconDisabledClass() {
>>>>>>> dfca2a99 (rebase)
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
    public function makeIconEnabledClass() {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
    public function makeIconEnabledClass() {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
    public function makeIconEnabledClass() {
=======
    public function makeIconEnabledClass()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeIconEnabledClass() {
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
    public function makeIconEnabledClass() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
    public function makeIconEnabledClass() {
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
=======
    public function makeIconEnabledClass() {
>>>>>>> dfca2a99 (rebase)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> 59a8928 (rebase)
>>>>>>> 655502de (rebase)
=======
>>>>>>> dfca2a99 (rebase)
    public function render() {
        /**
         * @phpstan-var view-string
         */
        $view = 'adminlte::components.layout.navbar-darkmode-widget';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
    public function render() {
=======
=======
>>>>>>> 64fad46 (rebase)
    public function render() {
=======
    public function render()
    {
>>>>>>> 31d6e3b (first)
=======
    public function render() {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> 59a8928 (rebase)
=======
=======
    public function render() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 64fad46 (rebase)
        return view('adminlte::components.layout.navbar-darkmode-widget');
>>>>>>> f617437 (rebase)
>>>>>>> a05b3ba1 (rebase)
=======
>>>>>>> dfca2a99 (rebase)
    }
}
