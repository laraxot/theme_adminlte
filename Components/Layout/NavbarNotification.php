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
>>>>>>> cf4e5c1 (rebase)
namespace Themes\AdminLTE\Components\Layout;
=======
namespace Themes\KlekooAdm\Components\Layout;
>>>>>>> b738e1c (rebase)
=======
namespace Themes\AdminLTE\Components\Layout;
>>>>>>> 63c2c43 (up)
=======
namespace Themes\KlekooAdm\Components\Layout;
>>>>>>> 8a5cc0b (.)

use Illuminate\View\Component;

class NavbarNotification extends Component {
    /**
     * Constants to define the available url configuration types.
     */
    protected const CFG_URL = 0;
    protected const CFG_ROUTE = 1;

    /**
     * The id attribute for the underlying <li> wrapper.
     *
     * @var string
     */
    public $id;

    /**
     * The notification icon (a Font Awesome icon).
     *
     * @var string
     */
    public $icon;

    /**
     * The notification icon color (an AdminLTE color).
     *
     * @var string
     */
    public $iconColor;

    /**
     * The label for the notification badge.
     *
     * @var string
     */
    public $badgeLabel;

    /**
     * The background color for the notification badge (an AdminLTE color).
     *
     * @var string
     */
    public $badgeColor;

    /**
     * An array with the update configuration. The valid properties are:
     * url => string/array representing the url to fetch for new data.
     * route => string/array representing the route to fetch for new data.
     * period => integer representing the updating period time (in seconds).
     *
     * @var array
     */
    public $updateCfg;

    /**
     * Enables the dropdown mode for the notification.
     *
     * @var bool
     */
    public $enableDropdownMode;

    /**
     * The label to use for the dropdown footer link.
     *
     * @var string
     */
    public $dropdownFooterLabel;

    /**
     * Create a new component instance.
     *
     * @param mixed      $id
     * @param mixed      $icon
     * @param mixed|null $iconColor
     * @param mixed|null $badgeLabel
     * @param mixed|null $badgeColor
     * @param mixed      $updateCfg
     * @param mixed      $enableDropdownMode
     * @param mixed|null $dropdownFooterLabel
     *
     * @return void
     */
    public function __construct(
        $id,
        $icon,
        $iconColor = null,
        $badgeLabel = null,
        $badgeColor = null,
        $updateCfg = [],
        $enableDropdownMode = false,
        $dropdownFooterLabel = null
    ) {
        $this->id = $id;
        $this->icon = $icon;
        $this->iconColor = $iconColor;
        $this->badgeLabel = $badgeLabel;
        $this->badgeColor = $badgeColor;
        $this->dropdownFooterLabel = $dropdownFooterLabel;
        $this->enableDropdownMode = (bool) $enableDropdownMode;
        $this->updateCfg = \is_array($updateCfg) ? $updateCfg : [];
    }

    /**
     * Make the class attribute for the list item.
     *
     * @return string
     */
    public function makeListItemClass() {
        $classes = ['nav-item'];

        if ($this->enableDropdownMode) {
            $classes[] = 'dropdown';
        }

        return implode(' ', $classes);
    }

    /**
     * Make the default attributes for the anchor tag.
     *
     * @return string
     */
    public function makeAnchorDefaultAttrs() {
        $attrs = ['class' => 'nav-link'];

        if ($this->enableDropdownMode) {
            $attrs['data-toggle'] = 'dropdown';
        }

        return $attrs;
    }

    /**
     * Make the class attribute for the notification icon.
     *
     * @return string
     */
    public function makeIconClass() {
        $classes = [$this->icon];

        if (! empty($this->iconColor)) {
            $classes[] = "text-{$this->iconColor}";
        }

        return implode(' ', $classes);
    }

    /**
     * Make the class attribute for the notification badge.
     *
     * @return string
     */
    public function makeBadgeClass() {
        $classes = ['badge navbar-badge text-bold text-xs badge-pill'];

        if (! empty($this->badgeColor)) {
            $classes[] = "badge-{$this->badgeColor}";
        }

        return implode(' ', $classes);
    }

    /**
     * Make the period time for updating the notification badge.
     *
     * @return int
     */
    public function makeUpdatePeriod() {
        if (! isset($this->updateCfg['period'])) {
            return 0;
        }

        return ((int) $this->updateCfg['period'] ?? 0) * 1000;
    }

    /**
     * Create the url used for fetch new notification data.
     *
     * @return string|null
     */
    public function makeUpdateUrl() {
        // Check if the url property is available.

        if (! empty($this->updateCfg['url'])) {
            return $this->makeUrlFromCfg($this->updateCfg['url']);
        }

        // Check if the route property is available.

        if (! empty($this->updateCfg['route'])) {
            return $this->makeUrlFromCfg(
                $this->updateCfg['route'],
                self::CFG_ROUTE
            );
        }

        // Return null when no url was configured.

        return null;
    }

    /**
     * Create the url from specific configuration type.
     *
     * @param string|array $cfg  the configuration for the url
     * @param mixed        $type the configuration type (url or route)
     *
     * @return string|null
     */
    protected function makeUrlFromCfg($cfg, $type = self::CFG_URL) {
        // When config is just a string representing the url or route name,
        // wrap it inside an array.

        $cfg = \is_string($cfg) ? [$cfg] : $cfg;

        // Check if config is an array with the url or route name and params.

        if (\is_array($cfg) && \count($cfg) >= 1) {
            $path = $cfg[0];
            $params = \is_array($cfg[1] ?? null) ? $cfg[1] : [];

            return (self::CFG_ROUTE === $type) ?
                route($path, $params) :
                url($path, $params);
        }

        // Return null for invalid types or data.

        return null;
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
        $view = 'adminlte::components.layout.navbar-notification';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }
}
