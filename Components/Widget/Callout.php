<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

>>>>>>> f405739 (up)
>>>>>>> f617437 (rebase)
namespace Themes\AdminLTE\Components\Widget;

use Illuminate\View\Component;

<<<<<<< HEAD
class Callout extends Component {
=======
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
>>>>>>> f617437 (rebase)
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
        $theme = null,
        $icon = null,
        $title = null,
        $titleClass = null
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
    public function makeCalloutClass()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeCalloutClass() {
>>>>>>> f405739 (up)
>>>>>>> f617437 (rebase)
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
    public function render() {
        /**
         * @phpstan-var view-string
         */
        $view = 'adminlte::components.widget.callout';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
=======
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
        return view('adminlte::components.widget.callout');
>>>>>>> f617437 (rebase)
    }
}
