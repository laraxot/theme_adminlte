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
class ProfileRowItem extends Component {
=======
<<<<<<< HEAD
<<<<<<< HEAD
class ProfileRowItem extends Component {
=======
class ProfileRowItem extends Component
{
>>>>>>> 31d6e3b (first)
=======
class ProfileRowItem extends Component {
>>>>>>> f405739 (up)
>>>>>>> f617437 (rebase)
    /**
     * The title/header for the item.
     *
     * @var string
     */
    public $title;

    /**
     * The text/description for the item.
     *
     * @var string
     */
    public $text;

    /**
     * A Font Awesome icon for the item.
     *
     * @var string
     */
    public $icon;

    /**
     * The item size. Used to wrap the item inside a col-size div.
     *
     * @var int
     */
    public $size;

    /**
     * The badge theme for the text attribute. When used, the text attribute
     * will be wrapped inside a badge of the configured theme. Available themes
     * are: light, dark, primary, secondary, info, success, warning, danger or
     * any other AdminLTE color like lighblue or teal.
     *
     * @var string
     */
    public $badge;

    /**
     * Setup an url for the item. When enabled the title attribute will be
     * wrapped inside a link pointing to that url.
     *
     * @var string
     */
    public $url;

    /**
     * Create a new component instance.
     *
     * @param mixed|null $title
     * @param mixed|null $text
     * @param mixed|null $icon
     * @param mixed      $size
     * @param mixed|null $badge
     * @param mixed|null $url
     *
     * @return void
     */
    public function __construct(
        $title = null,
        $text = null,
        $icon = null,
        $size = 12,
        $badge = null,
        $url = null
    ) {
        $this->title = $title;
        $this->text = $text;
        $this->icon = $icon;
        $this->size = $size;
        $this->badge = $badge;
        $this->url = $url;
    }

    /**
     * Make the text wrapper class.
     *
     * @return string
     */
<<<<<<< HEAD
    public function makeTextWrapperClass() {
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function makeTextWrapperClass() {
=======
    public function makeTextWrapperClass()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeTextWrapperClass() {
>>>>>>> f405739 (up)
>>>>>>> f617437 (rebase)
        $classes = ['float-right'];

        if (isset($this->badge)) {
            $classes[] = "badge bg-{$this->badge}";
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
        $view = 'adminlte::components.widget.profile-row-item';
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
        return view('adminlte::components.widget.profile-row-item');
>>>>>>> f617437 (rebase)
    }
}
