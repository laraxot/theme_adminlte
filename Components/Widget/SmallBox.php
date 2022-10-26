<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

>>>>>>> f405739 (up)
=======
declare(strict_types=1);

>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
namespace Themes\AdminLTE\Components\Widget;

use Illuminate\View\Component;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
class SmallBox extends Component {
=======
class SmallBox extends Component
{
>>>>>>> 31d6e3b (first)
=======
class SmallBox extends Component {
>>>>>>> f405739 (up)
=======
class SmallBox extends Component {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
    /**
     * The title/header for the box.
     *
     * @var string
     */
    public $title;

    /**
     * The text/description for the box.
     *
     * @var string
     */
    public $text;

    /**
     * A Font Awesome icon for the box.
     *
     * @var string
     */
    public $icon;

    /**
     * The box theme (light, dark, primary, secondary, info, success, warning,
     * danger or any other AdminLTE color like lighblue or teal).
     *
     * @var string
     */
    public $theme;

    /**
     * An url for the box. When enabled, a link-styled footer section will be
     * visible pointing to that url.
     *
     * @var string
     */
    public $url;

    /**
     * A text/label associated with the footer url.
     *
     * @var string
     */
    public $urlText;

    /**
     * Indicates if the box is loading. When enabled, an overlay with a loading
     * icon will show over the box.
     *
     * @var mixed
     */
    public $loading;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
<<<<<<< HEAD
<<<<<<< HEAD
        $title = null,
        $text = null,
        $icon = null,
        $theme = null,
        $url = null,
        $urlText = null,
        $loading = null
=======
        $title = null, $text = null, $icon = null, $theme = null,
        $url = null, $urlText = null, $loading = null
>>>>>>> 31d6e3b (first)
=======
        $title = null, $text = null, $icon = null, $theme = null,
        $url = null, $urlText = null, $loading = null
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
    ) {
        $this->title = $title;
        $this->text = $text;
        $this->icon = $icon;
        $this->theme = $theme;
        $this->url = $url;
        $this->urlText = $urlText;
        $this->loading = $loading;
    }

    /**
     * Make the box class.
     *
     * @return string
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function makeBoxClass() {
=======
    public function makeBoxClass()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeBoxClass() {
>>>>>>> f405739 (up)
=======
    public function makeBoxClass() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        $classes = ['small-box'];

        if (isset($this->theme)) {
            $classes[] = "bg-{$this->theme}";
        }

        return implode(' ', $classes);
    }

    /**
     * Make the loading overlay class.
     *
     * @return string
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function makeOverlayClass() {
=======
    public function makeOverlayClass()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeOverlayClass() {
>>>>>>> f405739 (up)
=======
    public function makeOverlayClass() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        $classes = ['overlay'];

        if (! isset($this->loading)) {
            $classes[] = 'd-none';
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
        return view('adminlte::components.widget.small-box');
    }
}
