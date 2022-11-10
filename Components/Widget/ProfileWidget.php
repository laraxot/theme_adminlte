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

use Illuminate\View\Component;

class ProfileWidget extends Component {
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
     * @param mixed|null $name
     * @param mixed|null $desc
     * @param mixed|null $img
     * @param mixed|null $theme
     * @param mixed|null $cover
     * @param mixed|null $headerClass
     * @param mixed|null $footerClass
     * @param mixed      $layoutType
     *
     * @return void
     */
    public function __construct(
        $name = null,
        $desc = null,
        $img = null,
        $theme = null,
        $cover = null,
        $headerClass = null,
        $footerClass = null,
        $layoutType = 'modern'
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

        if (! \in_array($this->layoutType, ['classic', 'modern'], true)) {
            $this->layoutType = 'modern';
        }
    }

    /**
     * Make the profile card class.
     *
     * @return string
     */
    public function makeCardClass() {
        $classes = ['card', 'card-widget'];

        if ('modern' === $this->layoutType) {
            $classes[] = 'widget-user';
        } elseif ('classic' === $this->layoutType) {
            $classes[] = 'widget-user-2';
        }

        return implode(' ', $classes);
    }

    /**
     * Make the profile header class.
     *
     * @return string
     */
    public function makeHeaderClass() {
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
    public function makeHeaderStyle() {
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
    public function makeFooterClass() {
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
    public function render() {
        /**
         * @phpstan-var view-string
         */
        $view = 'adminlte::components.widget.profile-widget';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }
}
