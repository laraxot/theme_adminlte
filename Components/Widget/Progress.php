<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
namespace Themes\AdminLTE\Components\Widget;

use Illuminate\View\Component;

<<<<<<< HEAD
class Progress extends Component {
=======
class Progress extends Component
{
>>>>>>> 31d6e3b (first)
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
     * @return void
     */
    public function __construct(
<<<<<<< HEAD
        $value = 0,
        $theme = 'info',
        $size = null,
        $striped = null,
        $vertical = null,
        $animated = null,
        $withLabel = null
=======
        $value = 0, $theme = 'info', $size = null, $striped = null,
        $vertical = null, $animated = null, $withLabel = null
>>>>>>> 31d6e3b (first)
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
    public function makeProgressClass() {
=======
    public function makeProgressClass()
    {
>>>>>>> 31d6e3b (first)
        $classes = ['progress'];

        if (isset($this->size) && in_array($this->size, $this->pSizes)) {
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
    public function makeProgressBarClass() {
=======
    public function makeProgressBarClass()
    {
>>>>>>> 31d6e3b (first)
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
    public function makeProgressBarStyle() {
=======
    public function makeProgressBarStyle()
    {
>>>>>>> 31d6e3b (first)
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
    public function render() {
=======
    public function render()
    {
>>>>>>> 31d6e3b (first)
        return view('adminlte::components.widget.progress');
    }
}
