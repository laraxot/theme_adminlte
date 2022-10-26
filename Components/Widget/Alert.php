<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

>>>>>>> f405739 (up)
namespace Themes\AdminLTE\Components\Widget;

use Illuminate\View\Component;

<<<<<<< HEAD
<<<<<<< HEAD
class Alert extends Component {
=======
class Alert extends Component
{
>>>>>>> 31d6e3b (first)
=======
class Alert extends Component {
>>>>>>> f405739 (up)
    /**
     * The default icon for each alert theme.
     *
     * @var array
     */
    protected $icons = [
<<<<<<< HEAD
<<<<<<< HEAD
        'dark' => 'fas fa-bolt',
        'light' => 'far fa-lightbulb',
        'primary' => 'fas fa-bell',
        'secondary' => 'fas fa-tag',
        'info' => 'fas fa-info-circle',
        'success' => 'fas fa-check-circle',
        'warning' => 'fas fa-exclamation-triangle',
        'danger' => 'fas fa-ban',
=======
        'dark'      => 'fas fa-bolt',
        'light'     => 'far fa-lightbulb',
        'primary'   => 'fas fa-bell',
        'secondary' => 'fas fa-tag',
        'info'      => 'fas fa-info-circle',
        'success'   => 'fas fa-check-circle',
        'warning'   => 'fas fa-exclamation-triangle',
        'danger'    => 'fas fa-ban',
>>>>>>> 31d6e3b (first)
=======
        'dark' => 'fas fa-bolt',
        'light' => 'far fa-lightbulb',
        'primary' => 'fas fa-bell',
        'secondary' => 'fas fa-tag',
        'info' => 'fas fa-info-circle',
        'success' => 'fas fa-check-circle',
        'warning' => 'fas fa-exclamation-triangle',
        'danger' => 'fas fa-ban',
>>>>>>> f405739 (up)
    ];

    /**
     * The alert icon (a Font Awesome icon).
     *
     * @var string
     */
    public $icon;

    /**
     * The alert theme (dark, light, primary, secondary, info, success, warning
     * or danger).
     *
     * @var string
     */
    public $theme;

    /**
     * The alert title.
     *
     * @var string
     */
    public $title;

    /**
     * Indicates if the alert is dismissable.
     *
     * @var bool|mixed
     */
    public $dismissable;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
<<<<<<< HEAD
        $theme = null,
        $icon = null,
        $title = null,
        $dismissable = null
=======
        $theme = null, $icon = null, $title = null, $dismissable = null
>>>>>>> 31d6e3b (first)
    ) {
        $this->theme = $theme;
        $this->icon = $icon;
        $this->title = $title;
        $this->dismissable = $dismissable;

        // When a theme is provided, use the default theme icon if no other
        // icon is provided.

        if (! isset($icon) && ! empty($theme)) {
            $this->icon = $this->icons[$theme];
        }
    }

    /**
     * Make the class attribute for the alert item.
     *
     * @return string
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function makeAlertClass() {
=======
    public function makeAlertClass()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeAlertClass() {
>>>>>>> f405739 (up)
        $classes = ['alert'];

        if (! empty($this->theme)) {
            $classes[] = "alert-{$this->theme}";
        } else {
            $classes[] = 'border';
        }

        if (! empty($this->dismissable)) {
            $classes[] = 'alert-dismissable';
        }

        return implode(' ', $classes);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
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
        return view('adminlte::components.widget.alert');
    }
}
