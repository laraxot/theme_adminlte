<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
namespace Themes\AdminLTE\Components\Widget;

use Illuminate\View\Component;

<<<<<<< HEAD
class Card extends Component {
=======
class Card extends Component
{
>>>>>>> 31d6e3b (first)
    /**
     * The title for the card header.
     *
     * @var string
     */
    public $title;

    /**
     * A Font Awesome icon for the card header.
     *
     * @var string
     */
    public $icon;

    /**
     * The card theme (light, dark, primary, secondary, info, success,
     * warning, danger or any other AdminLTE color like lighblue or teal).
     *
     * @var string
     */
    public $theme;

    /**
     * The theme mode (full or outline).
     *
     * @var string
     */
    public $themeMode;

    /**
     * Extra classes for the "card-body" element. This provides a way to
     * customize the card body container style.
     *
     * @var string
     */
    public $bodyClass;

    /**
     * Indicates if the card is disabled. When enabled, an overay will show
     * over the card.
     *
     * @var bool|mixed
     */
    public $disabled;

    /**
     * Indicates if the card is collapsible. When enabled, a button to
     * collapse/expand the card will be available. If is set to 'collapsed'
     * string, the card will be initiated on collapsed mode.
     *
     * @var mixed
     */
    public $collapsible;

    /**
     * Indicates if the card is removable. When enabled, a button to remove
     * the card will be available.
     *
     * @var bool|mixed
     */
    public $removable;

    /**
     * Indicates if the card is maximizable. When enabled, a button to maximize
     * the card will be available.
     *
     * @var bool|mixed
     */
    public $maximizable;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
<<<<<<< HEAD
        $title = null,
        $icon = null,
        $theme = null,
        $themeMode = null,
        $bodyClass = null,
        $disabled = null,
        $collapsible = null,
        $removable = null,
        $maximizable = null
=======
        $title = null, $icon = null, $theme = null, $themeMode = null,
        $bodyClass = null, $disabled = null, $collapsible = null,
        $removable = null, $maximizable = null
>>>>>>> 31d6e3b (first)
    ) {
        $this->title = $title;
        $this->icon = $icon;
        $this->theme = $theme;
        $this->themeMode = $themeMode;
        $this->bodyClass = $bodyClass;
        $this->disabled = $disabled;
        $this->removable = $removable;
        $this->collapsible = $collapsible;
        $this->maximizable = $maximizable;
    }

    /**
     * Make the class attribute for the card.
     *
     * @return string
     */
<<<<<<< HEAD
    public function makeCardClass() {
        $classes = ['card'];

        if (isset($this->theme)) {
            $base = 'full' === $this->themeMode ? 'bg-gradient' : 'card';
            $classes[] = "{$base}-{$this->theme}";

            if ('outline' === $this->themeMode) {
=======
    public function makeCardClass()
    {
        $classes = ['card'];

        if (isset($this->theme)) {
            $base = $this->themeMode === 'full' ? 'bg-gradient' : 'card';
            $classes[] = "{$base}-{$this->theme}";

            if ($this->themeMode === 'outline') {
>>>>>>> 31d6e3b (first)
                $classes[] = 'card-outline';
            }
        }

<<<<<<< HEAD
        if ('collapsed' === $this->collapsible) {
=======
        if ($this->collapsible === 'collapsed') {
>>>>>>> 31d6e3b (first)
            $classes[] = 'collapsed-card';
        }

        return implode(' ', $classes);
    }

    /**
     * Make the class attribute for the card body.
     *
     * @return string
     */
<<<<<<< HEAD
    public function makeCardBodyClass() {
=======
    public function makeCardBodyClass()
    {
>>>>>>> 31d6e3b (first)
        $classes = ['card-body'];

        if (isset($this->bodyClass)) {
            $classes[] = $this->bodyClass;
        }

        return implode(' ', $classes);
    }

    /**
     * Make the class attribute for the card header.
     *
     * @return string
     */
<<<<<<< HEAD
    public function makeCardHeaderClass() {
=======
    public function makeCardHeaderClass()
    {
>>>>>>> 31d6e3b (first)
        $classes = ['card-header'];

        if ($this->isCardHeaderEmpty()) {
            $classes[] = 'd-none';
        }

        return implode(' ', $classes);
    }

    /**
     * Make the class attribute for the card title.
     *
     * @return string
     */
<<<<<<< HEAD
    public function makeCardTitleClass() {
        $classes = ['card-title'];

        if (isset($this->theme) && 'outline' === $this->themeMode) {
=======
    public function makeCardTitleClass()
    {
        $classes = ['card-title'];

        if (isset($this->theme) && $this->themeMode === 'outline') {
>>>>>>> 31d6e3b (first)
            $classes[] = "text-{$this->theme}";
        }

        return implode(' ', $classes);
    }

    /**
     * Check if the card header is empty (no items defined for the header).
     *
     * @return bool
     */
<<<<<<< HEAD
    protected function isCardHeaderEmpty() {
=======
    protected function isCardHeaderEmpty()
    {
>>>>>>> 31d6e3b (first)
        $hasTools = isset($this->collapsible) ||
                    isset($this->maximizable) ||
                    isset($this->removable);

        return empty($this->title) && empty($this->icon) && ! $hasTools;
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
        return view('adminlte::components.widget.card');
    }
}
