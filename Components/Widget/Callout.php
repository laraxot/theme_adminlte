<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

<<<<<<< HEAD
=======
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

>>>>>>> f405739 (up)
=======
declare(strict_types=1);

>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
namespace Themes\AdminLTE\Components\Widget;
=======
namespace Themes\KlekooAdm\Components\Widget;
>>>>>>> b738e1c (rebase)

use Illuminate\View\Component;

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
=======
class Callout extends Component {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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
<<<<<<< HEAD
        $theme = null,
        $icon = null,
        $title = null,
        $titleClass = null
=======
        $theme = null, $icon = null, $title = null, $titleClass = null
>>>>>>> 31d6e3b (first)
=======
        $theme = null, $icon = null, $title = null, $titleClass = null
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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
=======
    public function makeCalloutClass() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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
        return view('adminlte::components.widget.callout');
    }
}
