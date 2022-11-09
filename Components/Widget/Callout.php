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
namespace Themes\AdminLTE\Components\Widget;

use Illuminate\View\Component;

<<<<<<< HEAD
class Callout extends Component {
=======
<<<<<<< HEAD
<<<<<<< HEAD
class Callout extends Component {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
class Callout extends Component {
=======
class Callout extends Component
{
>>>>>>> 31d6e3b (first)
=======
class Callout extends Component {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
class Callout extends Component {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
=======
class Callout extends Component {
>>>>>>> d79d738 (up)
>>>>>>> cf3e396 (rebase)
    /**
     * The callout icon (a Font Awesome icon).
     *
     * @var string
     */
    public $icon;

    /**
     * The callout theme (info, success, warning or danger).
     *
     * @var string
     */
    public $theme;

    /**
     * The callout title.
     *
     * @var string
     */
    public $title;

    /**
     * Extra classes for the title container. This provides a way to customize
     * the title style.
     *
     * @var string
     */
    public $titleClass;

    /**
     * Create a new component instance.
     *
     * @param mixed|null $theme
     * @param mixed|null $icon
     * @param mixed|null $title
     * @param mixed|null $titleClass
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
        $theme = null,
        $icon = null,
        $title = null,
        $titleClass = null
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
        $theme = null, $icon = null, $title = null, $titleClass = null
>>>>>>> 31d6e3b (first)
=======
        $theme = null, $icon = null, $title = null, $titleClass = null
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
=======
>>>>>>> d79d738 (up)
>>>>>>> cf3e396 (rebase)
    ) {
        $this->theme = $theme;
        $this->icon = $icon;
        $this->title = $title;
        $this->titleClass = $titleClass;
    }

    /**
     * Make the class attribute for the callout item.
     *
     * @return string
     */
<<<<<<< HEAD
    public function makeCalloutClass() {
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function makeCalloutClass() {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function makeCalloutClass() {
=======
    public function makeCalloutClass()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeCalloutClass() {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
    public function makeCalloutClass() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
=======
    public function makeCalloutClass() {
>>>>>>> d79d738 (up)
>>>>>>> cf3e396 (rebase)
        $classes = ['callout'];

        if (! empty($this->theme)) {
            $classes[] = "callout-{$this->theme}";
        }

        return implode(' ', $classes);
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
        $view = 'adminlte::components.widget.callout';
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
        return view('adminlte::components.widget.callout');
>>>>>>> f617437 (rebase)
>>>>>>> cf3e396 (rebase)
    }
}
