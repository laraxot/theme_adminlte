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
class ProfileWidget extends Component {
=======
class ProfileWidget extends Component
{
>>>>>>> 31d6e3b (first)
=======
class ProfileWidget extends Component {
>>>>>>> f405739 (up)
=======
class ProfileWidget extends Component {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
    /**
     * The user name of the profile widget.
     *
     * @var string
     */
    public $name;

    /**
     * The user description of the profile widget.
     *
     * @var string
     */
    public $desc;

    /**
     * The user image of the profile widget.
     *
     * @var string
     */
    public $img;

    /**
     * The profile header theme (light, dark, primary, secondary, info, success,
     * warning, danger or any other AdminLTE color like lighblue or teal).
     *
     * @var string
     */
    public $theme;

    /**
     * The profile header image cover. Overlays the header theme.
     *
     * @var string
     */
    public $cover;

    /**
     * Extra classes for the profile header. This provides a way to customize
     * the header style.
     *
     * @var string
     */
    public $headerClass;

    /**
     * Extra classes for the profile footer. This provides a way to customize
     * the footer style.
     *
     * @var string
     */
    public $footerClass;

    /**
     * The profile header layout type (modern or classic).
     *
     * @var string
     */
    public $layoutType;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
<<<<<<< HEAD
<<<<<<< HEAD
        $name = null,
        $desc = null,
        $img = null,
        $theme = null,
        $cover = null,
        $headerClass = null,
        $footerClass = null,
        $layoutType = 'modern'
=======
        $name = null, $desc = null, $img = null, $theme = null, $cover = null,
        $headerClass = null, $footerClass = null, $layoutType = 'modern'
>>>>>>> 31d6e3b (first)
=======
        $name = null, $desc = null, $img = null, $theme = null, $cover = null,
        $headerClass = null, $footerClass = null, $layoutType = 'modern'
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
    ) {
        $this->name = $name;
        $this->desc = $desc;
        $this->img = $img;
        $this->theme = $theme;
        $this->cover = $cover;
        $this->headerClass = $headerClass;
        $this->footerClass = $footerClass;

        // Setup the header layout type.

        $this->layoutType = $layoutType;

        if (! in_array($this->layoutType, ['classic', 'modern'])) {
            $this->layoutType = 'modern';
        }
    }

    /**
     * Make the profile card class.
     *
     * @return string
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
    public function makeCardClass() {
        $classes = ['card', 'card-widget'];

        if ('modern' === $this->layoutType) {
            $classes[] = 'widget-user';
        } elseif ('classic' === $this->layoutType) {
<<<<<<< HEAD
=======
    public function makeCardClass()
    {
=======
    public function makeCardClass() {
>>>>>>> f405739 (up)
        $classes = ['card', 'card-widget'];

        if ('modern' === $this->layoutType) {
            $classes[] = 'widget-user';
<<<<<<< HEAD
        } elseif ($this->layoutType === 'classic') {
>>>>>>> 31d6e3b (first)
=======
        } elseif ('classic' === $this->layoutType) {
>>>>>>> f405739 (up)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
            $classes[] = 'widget-user-2';
        }

        return implode(' ', $classes);
    }

    /**
     * Make the profile header class.
     *
     * @return string
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function makeHeaderClass() {
=======
    public function makeHeaderClass()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeHeaderClass() {
>>>>>>> f405739 (up)
=======
    public function makeHeaderClass() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        $classes = ['widget-user-header'];

        if (isset($this->theme) && empty($this->cover)) {
            $classes[] = "bg-gradient-{$this->theme}";
        }

        if (! empty($this->headerClass)) {
            $classes[] = $this->headerClass;
        }

        return implode(' ', $classes);
    }

    /**
     * Make the profile header style.
     *
     * @return string
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function makeHeaderStyle() {
=======
    public function makeHeaderStyle()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeHeaderStyle() {
>>>>>>> f405739 (up)
=======
    public function makeHeaderStyle() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        $style = [];

        if (! empty($this->cover)) {
            $style[] = "background: url('{$this->cover}') center center";
        }

        return implode(';', $style);
    }

    /**
     * Make the profile footer class.
     *
     * @return string
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function makeFooterClass() {
=======
    public function makeFooterClass()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeFooterClass() {
>>>>>>> f405739 (up)
=======
    public function makeFooterClass() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        $classes = ['card-footer'];

        if (! empty($this->footerClass)) {
            $classes[] = $this->footerClass;
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
        return view('adminlte::components.widget.profile-widget');
    }
}
