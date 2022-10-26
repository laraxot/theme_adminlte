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
class InfoBox extends Component {
=======
class InfoBox extends Component
{
>>>>>>> 31d6e3b (first)
=======
class InfoBox extends Component {
>>>>>>> f405739 (up)
=======
class InfoBox extends Component {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
    /**
     * The title/header for the box.
     *
     * @var string
     */
    public $title;

    /**
     * A short text description for the box.
     *
     * @var string
     */
    public $text;

    /**
     * A long description for the box.
     *
     * @var string
     */
    public $description;

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
     * The icon theme (light, dark, primary, secondary, info, success, warning,
     * danger or any other AdminLTE color like lighblue or teal).
     *
     * @var string
     */
    public $iconTheme;

    /**
     * Enables a progress bar for the box. The value should be an integer
     * indicating the percentage of the progress bar.
     *
     * @var int
     */
    public $progress;

    /**
     * The progress bar theme (light, dark, primary, secondary, info, success,
     * warning, danger or any other AdminLTE color like lighblue or teal).
     *
     * @var string
     */
    public $progressTheme;

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
        $description = null,
        $theme = null,
        $iconTheme = null,
        $progress = null,
=======
        $title = null, $text = null, $icon = null, $description = null,
        $theme = null, $iconTheme = null, $progress = null,
>>>>>>> 31d6e3b (first)
=======
        $title = null, $text = null, $icon = null, $description = null,
        $theme = null, $iconTheme = null, $progress = null,
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        $progressTheme = 'white'
    ) {
        $this->title = $title;
        $this->text = $text;
        $this->icon = $icon;
        $this->description = $description;
        $this->theme = $theme;
        $this->iconTheme = $iconTheme;
        $this->progress = $progress;
        $this->progressTheme = $progressTheme;
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
        $classes = ['info-box'];

        if (isset($this->theme)) {
            $classes[] = "bg-{$this->theme}";
        }

        return implode(' ', $classes);
    }

    /**
     * Make the icon container class.
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
        $classes = ['info-box-icon'];

        if (isset($this->iconTheme)) {
            $classes[] = "bg-{$this->iconTheme}";
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
        return view('adminlte::components.widget.info-box');
    }
}
