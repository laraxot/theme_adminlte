<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Themes\AdminLTE\Components\Widget;
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
>>>>>>> b6bf7b3 (rebase)

use Illuminate\View\Component;

class Alert extends Component {
    /**
     * The default icon for each alert theme.
     *
     * @var array
     */
    protected $icons = [
        'dark' => 'fas fa-bolt',
        'light' => 'far fa-lightbulb',
        'primary' => 'fas fa-bell',
        'secondary' => 'fas fa-tag',
        'info' => 'fas fa-info-circle',
        'success' => 'fas fa-check-circle',
        'warning' => 'fas fa-exclamation-triangle',
        'danger' => 'fas fa-ban',
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
     * @param mixed|null $theme
     * @param mixed|null $icon
     * @param mixed|null $title
     * @param mixed|null $dismissable
     *
     * @return void
     */
    public function __construct(
        $theme = null,
        $icon = null,
        $title = null,
        $dismissable = null
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
    public function makeAlertClass() {
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
    public function render() {
        /**
         * @phpstan-var view-string
         */
        $view = 'adminlte::components.widget.alert';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }
}
