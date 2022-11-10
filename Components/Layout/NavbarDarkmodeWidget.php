<?php

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
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
>>>>>>> 312af933 (rebase)
=======
=======
declare(strict_types=1);

>>>>>>> d79d738 (up)
>>>>>>> a05b3ba1 (rebase)
namespace Themes\AdminLTE\Components\Layout;

use Illuminate\View\Component;
use Themes\AdminLTE\Http\Controllers\DarkModeController;

<<<<<<< HEAD
class NavbarDarkmodeWidget extends Component {
=======
<<<<<<< HEAD
<<<<<<< HEAD
class NavbarDarkmodeWidget extends Component {
=======
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
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
class NavbarDarkmodeWidget extends Component {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
=======
class NavbarDarkmodeWidget extends Component {
>>>>>>> d79d738 (up)
>>>>>>> a05b3ba1 (rebase)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 905478d (rebase)
=======
>>>>>>> d79d738 (up)
>>>>>>> a05b3ba1 (rebase)
        $iconDisabled = null,
        $iconEnabled = null,
        $colorDisabled = null,
        $colorEnabled = null
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> d79d738 (up)
>>>>>>> a05b3ba1 (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
    public function makeIconClass() {
=======
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
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
    public function makeIconClass() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
=======
    public function makeIconClass() {
>>>>>>> d79d738 (up)
>>>>>>> a05b3ba1 (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
    public function makeIconDisabledClass() {
=======
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
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
    public function makeIconDisabledClass() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
=======
    public function makeIconDisabledClass() {
>>>>>>> d79d738 (up)
>>>>>>> a05b3ba1 (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
    public function makeIconEnabledClass() {
=======
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
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
    public function makeIconEnabledClass() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
=======
    public function makeIconEnabledClass() {
>>>>>>> d79d738 (up)
>>>>>>> a05b3ba1 (rebase)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
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
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
    public function render() {
        return view('adminlte::components.layout.navbar-darkmode-widget');
>>>>>>> f617437 (rebase)
>>>>>>> a05b3ba1 (rebase)
    }
}
