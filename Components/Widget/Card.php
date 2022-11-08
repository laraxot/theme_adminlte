<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

>>>>>>> f405739 (up)
>>>>>>> f617437 (rebase)
namespace Themes\AdminLTE\Components\Widget;

use Illuminate\View\Component;

<<<<<<< HEAD
class Card extends Component {
=======
<<<<<<< HEAD
<<<<<<< HEAD
class Card extends Component {
=======
class Card extends Component
{
>>>>>>> 31d6e3b (first)
=======
class Card extends Component {
>>>>>>> f405739 (up)
>>>>>>> f617437 (rebase)
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
     * @param mixed|null $title
     * @param mixed|null $icon
     * @param mixed|null $theme
     * @param mixed|null $themeMode
     * @param mixed|null $bodyClass
     * @param mixed|null $disabled
     * @param mixed|null $collapsible
     * @param mixed|null $removable
     * @param mixed|null $maximizable
     *
     * @return void
     */
    public function __construct(
        $title = null,
        $icon = null,
        $theme = null,
        $themeMode = null,
        $bodyClass = null,
        $disabled = null,
        $collapsible = null,
        $removable = null,
        $maximizable = null
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
    public function makeCardClass() {
        $classes = ['card'];

        if (isset($this->theme)) {
            $base = 'full' === $this->themeMode ? 'bg-gradient' : 'card';
            $classes[] = "{$base}-{$this->theme}";

            if ('outline' === $this->themeMode) {
<<<<<<< HEAD
=======
=======
    public function makeCardClass()
    {
=======
    public function makeCardClass() {
>>>>>>> f405739 (up)
        $classes = ['card'];

        if (isset($this->theme)) {
            $base = 'full' === $this->themeMode ? 'bg-gradient' : 'card';
            $classes[] = "{$base}-{$this->theme}";

<<<<<<< HEAD
            if ($this->themeMode === 'outline') {
>>>>>>> 31d6e3b (first)
=======
            if ('outline' === $this->themeMode) {
>>>>>>> f405739 (up)
>>>>>>> f617437 (rebase)
                $classes[] = 'card-outline';
            }
        }

<<<<<<< HEAD
        if ('collapsed' === $this->collapsible) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if ('collapsed' === $this->collapsible) {
=======
        if ($this->collapsible === 'collapsed') {
>>>>>>> 31d6e3b (first)
=======
        if ('collapsed' === $this->collapsible) {
>>>>>>> f405739 (up)
>>>>>>> f617437 (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
    public function makeCardBodyClass() {
=======
    public function makeCardBodyClass()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeCardBodyClass() {
>>>>>>> f405739 (up)
>>>>>>> f617437 (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
    public function makeCardHeaderClass() {
=======
    public function makeCardHeaderClass()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeCardHeaderClass() {
>>>>>>> f405739 (up)
>>>>>>> f617437 (rebase)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
    public function makeCardTitleClass() {
        $classes = ['card-title'];

        if (isset($this->theme) && 'outline' === $this->themeMode) {
<<<<<<< HEAD
=======
=======
    public function makeCardTitleClass()
    {
        $classes = ['card-title'];

        if (isset($this->theme) && $this->themeMode === 'outline') {
>>>>>>> 31d6e3b (first)
=======
    public function makeCardTitleClass() {
        $classes = ['card-title'];

        if (isset($this->theme) && 'outline' === $this->themeMode) {
>>>>>>> f405739 (up)
>>>>>>> f617437 (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
    protected function isCardHeaderEmpty() {
=======
    protected function isCardHeaderEmpty()
    {
>>>>>>> 31d6e3b (first)
=======
    protected function isCardHeaderEmpty() {
>>>>>>> f405739 (up)
>>>>>>> f617437 (rebase)
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
        /**
         * @phpstan-var view-string
         */
        $view = 'adminlte::components.widget.card';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
=======
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
        return view('adminlte::components.widget.card');
>>>>>>> f617437 (rebase)
    }
}
