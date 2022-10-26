<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
namespace Themes\AdminLTE\Components\Widget;

use Illuminate\View\Component;

<<<<<<< HEAD
class SmallBox extends Component {
=======
class SmallBox extends Component
{
>>>>>>> 31d6e3b (first)
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
    public function makeBoxClass() {
=======
    public function makeBoxClass()
    {
>>>>>>> 31d6e3b (first)
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
    public function makeOverlayClass() {
=======
    public function makeOverlayClass()
    {
>>>>>>> 31d6e3b (first)
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
    public function render() {
=======
    public function render()
    {
>>>>>>> 31d6e3b (first)
        return view('adminlte::components.widget.small-box');
    }
}
