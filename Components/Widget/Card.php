<?php

declare(strict_types=1);

<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

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
>>>>>>> 905478d (rebase)
>>>>>>> 312af933 (rebase)
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

use Illuminate\View\Component;

class Card extends Component {
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
    public function makeCardClass() {
        $classes = ['card'];

        if (isset($this->theme)) {
            $base = 'full' === $this->themeMode ? 'bg-gradient' : 'card';
            $classes[] = "{$base}-{$this->theme}";

            if ('outline' === $this->themeMode) {
                $classes[] = 'card-outline';
            }
        }

        if ('collapsed' === $this->collapsible) {
            $classes[] = 'collapsed-card';
        }

        return implode(' ', $classes);
    }

    /**
     * Make the class attribute for the card body.
     *
     * @return string
     */
    public function makeCardBodyClass() {
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
    public function makeCardHeaderClass() {
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
    public function makeCardTitleClass() {
        $classes = ['card-title'];

        if (isset($this->theme) && 'outline' === $this->themeMode) {
            $classes[] = "text-{$this->theme}";
        }

        return implode(' ', $classes);
    }

    /**
     * Check if the card header is empty (no items defined for the header).
     *
     * @return bool
     */
    protected function isCardHeaderEmpty() {
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
    public function render() {
        /**
         * @phpstan-var view-string
         */
        $view = 'adminlte::components.widget.card';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }
}
