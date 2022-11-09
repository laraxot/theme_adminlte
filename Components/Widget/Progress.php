<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
declare(strict_types=1);

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 4a726e2 (rebase)
=======
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
declare(strict_types=1);

>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> d79d738 (up)
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
namespace Themes\AdminLTE\Components\Widget;
=======
namespace Themes\KlekooAdm\Components\Widget;
>>>>>>> b738e1c (rebase)

use Illuminate\View\Component;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
class Progress extends Component {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
class Progress extends Component {
=======
class Progress extends Component
{
>>>>>>> 31d6e3b (first)
=======
class Progress extends Component {
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
class Progress extends Component {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
class Progress extends Component {
>>>>>>> d79d738 (up)
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
    /**
     * The available progress bar sizes.
     *
     * @var array
     */
    protected $pSizes = ['sm', 'xs', 'xxs'];

    /**
     * The progress bar percentage value (integer between 0 and 100).
     *
     * @var int
     */
    public $value;

    /**
     * The progress bar theme (light, dark, primary, secondary, info, success,
     * warning, danger or any other AdminLTE color like lighblue or teal).
     *
     * @var string
     */
    public $theme;

    /**
     * The progress bar size (sm, xs or xxs).
     *
     * @var string
     */
    public $size;

    /**
     * Indicates if the progress bar have stripes.
     *
     * @var bool|mixed
     */
    public $striped;

    /**
     * Indicates if the progress bar is animated.
     *
     * @var bool|mixed
     */
    public $animated;

    /**
     * Indicates if the progress bar is vertical.
     *
     * @var bool|mixed
     */
    public $vertical;

    /**
     * Enables the progress bar label.
     *
     * @var bool|mixed
     */
    public $withLabel;

    /**
     * Create a new component instance.
     *
     * @param mixed      $value
     * @param mixed      $theme
     * @param mixed|null $size
     * @param mixed|null $striped
     * @param mixed|null $vertical
     * @param mixed|null $animated
     * @param mixed|null $withLabel
     *
     * @return void
     */
    public function __construct(
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
=======
>>>>>>> 64fad46 (rebase)
        $value = 0,
        $theme = 'info',
        $size = null,
        $striped = null,
        $vertical = null,
        $animated = null,
        $withLabel = null
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
=======
=======
        $value = 0, $theme = 'info', $size = null, $striped = null,
        $vertical = null, $animated = null, $withLabel = null
>>>>>>> 31d6e3b (first)
=======
        $value = 0, $theme = 'info', $size = null, $striped = null,
        $vertical = null, $animated = null, $withLabel = null
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
=======
>>>>>>> 64fad46 (rebase)
    ) {
        // Control and setup the value property.

        $this->value = ($value >= 0 && $value <= 100) ? $value : 0;

        // Initialize other properties.

        $this->theme = $theme;
        $this->size = $size;
        $this->striped = $striped;
        $this->animated = $animated;
        $this->vertical = $vertical;
        $this->withLabel = $withLabel;
    }

    /**
     * Make the class attribute for the main progress item.
     *
     * @return string
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
    public function makeProgressClass() {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
    public function makeProgressClass() {
=======
    public function makeProgressClass()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeProgressClass() {
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
    public function makeProgressClass() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
    public function makeProgressClass() {
>>>>>>> d79d738 (up)
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
        $classes = ['progress'];

        if (isset($this->size) && \in_array($this->size, $this->pSizes, true)) {
            $classes[] = "progress-{$this->size}";
        }

        if (isset($this->vertical)) {
            $classes[] = 'vertical';
        }

        return implode(' ', $classes);
    }

    /**
     * Make the class attribute for the progress bar item.
     *
     * @return string
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
    public function makeProgressBarClass() {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
    public function makeProgressBarClass() {
=======
    public function makeProgressBarClass()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeProgressBarClass() {
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
    public function makeProgressBarClass() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
    public function makeProgressBarClass() {
>>>>>>> d79d738 (up)
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
        $classes = ['progress-bar', 'text-bold'];

        if (! empty($this->theme)) {
            $classes[] = "bg-{$this->theme}";
        }

        if (isset($this->striped) || isset($this->animated)) {
            $classes[] = 'progress-bar-striped';
        }

        if (isset($this->animated)) {
            $classes[] = 'progress-bar-animated';
        }

        return implode(' ', $classes);
    }

    /**
     * Make the style attribute for the progress bar item.
     *
     * @return string
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
    public function makeProgressBarStyle() {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
    public function makeProgressBarStyle() {
=======
    public function makeProgressBarStyle()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeProgressBarStyle() {
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
    public function makeProgressBarStyle() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
    public function makeProgressBarStyle() {
>>>>>>> d79d738 (up)
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
        $styles = [];

        if (isset($this->vertical)) {
            $styles[] = "height:{$this->value}%";
        } else {
            $styles[] = "width:{$this->value}%";
        }

        return implode(';', $styles);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
    public function render() {
        /**
         * @phpstan-var view-string
         */
        $view = 'adminlte::components.widget.progress';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
    public function render() {
=======
=======
>>>>>>> 64fad46 (rebase)
    public function render() {
=======
    public function render()
    {
>>>>>>> 31d6e3b (first)
=======
    public function render() {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> 59a8928 (rebase)
=======
=======
    public function render() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 64fad46 (rebase)
        return view('adminlte::components.widget.progress');
>>>>>>> f617437 (rebase)
    }
}
