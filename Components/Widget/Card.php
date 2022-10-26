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
class Card extends Component {
=======
class Card extends Component
{
>>>>>>> 31d6e3b (first)
=======
class Card extends Component {
>>>>>>> f405739 (up)
=======
class Card extends Component {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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
=======
        $title = null, $icon = null, $theme = null, $themeMode = null,
        $bodyClass = null, $disabled = null, $collapsible = null,
        $removable = null, $maximizable = null
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
    public function makeCardClass() {
        $classes = ['card'];

        if (isset($this->theme)) {
            $base = 'full' === $this->themeMode ? 'bg-gradient' : 'card';
            $classes[] = "{$base}-{$this->theme}";

            if ('outline' === $this->themeMode) {
<<<<<<< HEAD
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
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
                $classes[] = 'card-outline';
            }
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if ('collapsed' === $this->collapsible) {
=======
        if ($this->collapsible === 'collapsed') {
>>>>>>> 31d6e3b (first)
=======
        if ('collapsed' === $this->collapsible) {
>>>>>>> f405739 (up)
=======
        if ('collapsed' === $this->collapsible) {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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
=======
    public function makeCardBodyClass() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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
=======
    public function makeCardHeaderClass() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
    public function makeCardTitleClass() {
        $classes = ['card-title'];

        if (isset($this->theme) && 'outline' === $this->themeMode) {
<<<<<<< HEAD
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
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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
=======
    protected function isCardHeaderEmpty() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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
        return view('adminlte::components.widget.card');
    }
}
