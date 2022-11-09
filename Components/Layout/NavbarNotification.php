<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
declare(strict_types=1);

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
declare(strict_types=1);

>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> d79d738 (up)
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
namespace Themes\AdminLTE\Components\Layout;

use Illuminate\View\Component;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
class NavbarNotification extends Component {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
class NavbarNotification extends Component {
=======
class NavbarNotification extends Component
{
>>>>>>> 31d6e3b (first)
=======
class NavbarNotification extends Component {
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
class NavbarNotification extends Component {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
class NavbarNotification extends Component {
>>>>>>> d79d738 (up)
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
=======
>>>>>>> 64fad46 (rebase)
        $id,
        $icon,
        $iconColor = null,
        $badgeLabel = null,
        $badgeColor = null,
        $updateCfg = [],
        $enableDropdownMode = false,
        $dropdownFooterLabel = null
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
=======
=======
        $id, $icon, $iconColor = null, $badgeLabel = null, $badgeColor = null,
        $updateCfg = [], $enableDropdownMode = false, $dropdownFooterLabel = null
>>>>>>> 31d6e3b (first)
=======
        $id, $icon, $iconColor = null, $badgeLabel = null, $badgeColor = null,
        $updateCfg = [], $enableDropdownMode = false, $dropdownFooterLabel = null
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
=======
>>>>>>> 64fad46 (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
    public function makeListItemClass() {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
    public function makeListItemClass() {
=======
    public function makeListItemClass()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeListItemClass() {
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
    public function makeListItemClass() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
    public function makeListItemClass() {
>>>>>>> d79d738 (up)
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
    public function makeAnchorDefaultAttrs() {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
    public function makeAnchorDefaultAttrs() {
=======
    public function makeAnchorDefaultAttrs()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeAnchorDefaultAttrs() {
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
    public function makeAnchorDefaultAttrs() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
    public function makeAnchorDefaultAttrs() {
>>>>>>> d79d738 (up)
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
    public function makeIconClass() {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
    public function makeIconClass() {
=======
    public function makeIconClass()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeIconClass() {
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
    public function makeIconClass() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
    public function makeIconClass() {
>>>>>>> d79d738 (up)
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
    public function makeBadgeClass() {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
    public function makeBadgeClass() {
=======
    public function makeBadgeClass()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeBadgeClass() {
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
    public function makeBadgeClass() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
    public function makeBadgeClass() {
>>>>>>> d79d738 (up)
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
    public function makeUpdatePeriod() {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
    public function makeUpdatePeriod() {
=======
    public function makeUpdatePeriod()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeUpdatePeriod() {
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
    public function makeUpdatePeriod() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
    public function makeUpdatePeriod() {
>>>>>>> d79d738 (up)
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
    public function makeUpdateUrl() {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
    public function makeUpdateUrl() {
=======
    public function makeUpdateUrl()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeUpdateUrl() {
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
    public function makeUpdateUrl() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
    public function makeUpdateUrl() {
>>>>>>> d79d738 (up)
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
=======
>>>>>>> d79d738 (up)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
<<<<<<< HEAD
>>>>>>> 59a8928 (rebase)
=======
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
>>>>>>> 64fad46 (rebase)
     * @param string|array $cfg  the configuration for the url
     * @param mixed        $type the configuration type (url or route)
     *
     * @return string|null
     */
    protected function makeUrlFromCfg($cfg, $type = self::CFG_URL) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
=======
=======
>>>>>>> 905478d (rebase)
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
     * @param  string|array  $cfg  The configuration for the url.
     * @param  mixed  $type  The configuration type (url or route).
     * @return string|null
     */
    protected function makeUrlFromCfg($cfg, $type = self::CFG_URL)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param string|array $cfg  the configuration for the url
     * @param mixed        $type the configuration type (url or route)
     *
     * @return string|null
     */
    protected function makeUrlFromCfg($cfg, $type = self::CFG_URL) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
        // When config is just a string representing the url or route name,
        // wrap it inside an array.

        $cfg = \is_string($cfg) ? [$cfg] : $cfg;

        // Check if config is an array with the url or route name and params.

        if (\is_array($cfg) && \count($cfg) >= 1) {
            $path = $cfg[0];
            $params = \is_array($cfg[1] ?? null) ? $cfg[1] : [];

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
            return (self::CFG_ROUTE === $type) ?
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
            return (self::CFG_ROUTE === $type) ?
=======
            return ($type === self::CFG_ROUTE) ?
>>>>>>> 31d6e3b (first)
=======
            return (self::CFG_ROUTE === $type) ?
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
            return (self::CFG_ROUTE === $type) ?
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
            return (self::CFG_ROUTE === $type) ?
>>>>>>> d79d738 (up)
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
    public function render() {
        /**
         * @phpstan-var view-string
         */
        $view = 'adminlte::components.layout.navbar-notification';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
    public function render() {
=======
=======
>>>>>>> 64fad46 (rebase)
    public function render() {
=======
    public function render()
    {
>>>>>>> 31d6e3b (first)
=======
    public function render() {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> 59a8928 (rebase)
=======
=======
    public function render() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 64fad46 (rebase)
        return view('adminlte::components.layout.navbar-notification');
>>>>>>> f617437 (rebase)
    }
}
