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
namespace Themes\AdminLTE\Components\Tool;
=======
namespace Themes\KlekooAdm\Components\Tool;
>>>>>>> b738e1c (rebase)
=======
namespace Themes\AdminLTE\Components\Tool;
>>>>>>> 63c2c43 (up)

use Illuminate\View\Component;

class Modal extends Component {
    /**
     * The available modal sizes.
     *
     * @var array
     */
    protected $mSizes = ['sm', 'lg', 'xl'];

    /**
     * The modal ID attribute, used to target the modal and show it.
     *
     * @var string
     */
    public $id;

    /**
     * The title for the modal header.
     *
     * @var string
     */
    public $title;

    /**
     * A Font Awesome icon for the modal header.
     *
     * @var string
     */
    public $icon;

    /**
     * The modal size (sm, lg or xl).
     *
     * @var string
     */
    public $size;

    /**
     * The modal theme (light, dark, primary, secondary, info, success,
     * warning, danger or any other AdminLTE color like lighblue or teal).
     *
     * @var string
     */
    public $theme;

    /**
     * Indicates if the modal is vertically centered.
     *
     * @var bool|mixed
     */
    public $vCentered;

    /**
     * Indicates if the modal is scrollable. Enable this if the modal content
     * is large.
     *
     * @var bool|mixed
     */
    public $scrollable;

    /**
     * Indicates if the backdrop is static. When enabled, the modal will not
     * close when clicking outside it.
     *
     * @var bool|mixed
     */
    public $staticBackdrop;

    /**
     * Indicates if the show/hide fade animations are disabled.
     *
     * @var bool|mixed
     */
    public $disableAnimations;

    /**
     * Create a new component instance.
     *
     * @param mixed      $id
     * @param mixed|null $title
     * @param mixed|null $icon
     * @param mixed|null $size
     * @param mixed|null $theme
     * @param mixed|null $vCentered
     * @param mixed|null $scrollable
     * @param mixed|null $staticBackdrop
     * @param mixed|null $disableAnimations
     *
     * @return void
     */
    public function __construct(
        $id,
        $title = null,
        $icon = null,
        $size = null,
        $theme = null,
        $vCentered = null,
        $scrollable = null,
        $staticBackdrop = null,
        $disableAnimations = null
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->icon = $icon;
        $this->size = $size;
        $this->theme = $theme;
        $this->vCentered = $vCentered;
        $this->scrollable = $scrollable;
        $this->staticBackdrop = $staticBackdrop;
        $this->disableAnimations = $disableAnimations;
    }

    /**
     * Make the class attribute for the modal.
     *
     * @return string
     */
    public function makeModalClass() {
        $classes = ['modal'];

        if (! isset($this->disableAnimations)) {
            $classes[] = 'fade';
        }

        return implode(' ', $classes);
    }

    /**
     * Make the class attribute for the modal dialog.
     *
     * @return string
     */
    public function makeModalDialogClass() {
        $classes = ['modal-dialog'];

        if (isset($this->vCentered)) {
            $classes[] = 'modal-dialog-centered';
        }

        if (isset($this->scrollable)) {
            $classes[] = 'modal-dialog-scrollable';
        }

        if (isset($this->size) && \in_array($this->size, $this->mSizes, true)) {
            $classes[] = "modal-{$this->size}";
        }

        return implode(' ', $classes);
    }

    /**
     * Make the class attribute for the modal header.
     *
     * @return string
     */
    public function makeModalHeaderClass() {
        $classes = ['modal-header'];

        if (isset($this->theme)) {
            $classes[] = "bg-{$this->theme}";
        }

        return implode(' ', $classes);
    }

    /**
     * Make the class attribute for the close button.
     *
     * @return string
     */
    public function makeCloseButtonClass() {
        $classes = ['bg-secondary'];

        if (isset($this->theme)) {
            $classes = ["bg-{$this->theme}"];
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
        $view = 'adminlte::components.tool.modal';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }
}
