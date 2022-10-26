<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
namespace Themes\AdminLTE\Components\Widget;

use Illuminate\View\Component;

<<<<<<< HEAD
class Callout extends Component {
=======
class Callout extends Component
{
>>>>>>> 31d6e3b (first)
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
     * @return void
     */
    public function __construct(
<<<<<<< HEAD
        $theme = null,
        $icon = null,
        $title = null,
        $titleClass = null
=======
        $theme = null, $icon = null, $title = null, $titleClass = null
>>>>>>> 31d6e3b (first)
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
    public function makeCalloutClass()
    {
>>>>>>> 31d6e3b (first)
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
=======
    public function render()
    {
>>>>>>> 31d6e3b (first)
        return view('adminlte::components.widget.callout');
    }
}
