<?php

<<<<<<< HEAD
declare(strict_types=1);

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
>>>>>>> 905478d7 (rebase)
namespace Themes\AdminLTE\Components\Widget;
=======
namespace Themes\KlekooAdm\Components\Widget;
>>>>>>> b738e1c (rebase)
=======
namespace Themes\AdminLTE\Components\Widget;
>>>>>>> 63c2c43 (up)
=======
namespace Themes\KlekooAdm\Components\Widget;
>>>>>>> 8a5cc0b (.)
=======
namespace Themes\AdminLTE\Components\Widget;
>>>>>>> 5b4054a (.)

use Illuminate\View\Component;

<<<<<<< HEAD
class InfoBox extends Component {
=======
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
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
class InfoBox extends Component {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
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
     * @param mixed|null $title
     * @param mixed|null $text
     * @param mixed|null $icon
     * @param mixed|null $description
     * @param mixed|null $theme
     * @param mixed|null $iconTheme
     * @param mixed|null $progress
     * @param mixed      $progressTheme
     *
     * @return void
     */
    public function __construct(
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 905478d7 (rebase)
        $title = null,
        $text = null,
        $icon = null,
        $description = null,
        $theme = null,
        $iconTheme = null,
        $progress = null,
<<<<<<< HEAD
=======
=======
        $title = null, $text = null, $icon = null, $description = null,
        $theme = null, $iconTheme = null, $progress = null,
>>>>>>> 31d6e3b (first)
=======
        $title = null, $text = null, $icon = null, $description = null,
        $theme = null, $iconTheme = null, $progress = null,
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
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
    public function makeBoxClass() {
=======
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
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
    public function makeBoxClass() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
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
>>>>>>> 905478d7 (rebase)
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
    public function render() {
        /**
         * @phpstan-var view-string
         */
        $view = 'adminlte::components.widget.info-box';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
=======
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
>>>>>>> f617437 (rebase)
    }
}
