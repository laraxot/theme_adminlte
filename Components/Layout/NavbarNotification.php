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
namespace Themes\AdminLTE\Components\Layout;
=======
namespace Themes\KlekooAdm\Components\Layout;
>>>>>>> b738e1c (rebase)

use Illuminate\View\Component;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
class NavbarNotification extends Component {
=======
class NavbarNotification extends Component
{
>>>>>>> 31d6e3b (first)
=======
class NavbarNotification extends Component {
>>>>>>> f405739 (up)
=======
class NavbarNotification extends Component {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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
     * @return void
     */
    public function __construct(
<<<<<<< HEAD
<<<<<<< HEAD
        $id,
        $icon,
        $iconColor = null,
        $badgeLabel = null,
        $badgeColor = null,
        $updateCfg = [],
        $enableDropdownMode = false,
        $dropdownFooterLabel = null
=======
        $id, $icon, $iconColor = null, $badgeLabel = null, $badgeColor = null,
        $updateCfg = [], $enableDropdownMode = false, $dropdownFooterLabel = null
>>>>>>> 31d6e3b (first)
=======
        $id, $icon, $iconColor = null, $badgeLabel = null, $badgeColor = null,
        $updateCfg = [], $enableDropdownMode = false, $dropdownFooterLabel = null
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
    ) {
        $this->id = $id;
        $this->icon = $icon;
        $this->iconColor = $iconColor;
        $this->badgeLabel = $badgeLabel;
        $this->badgeColor = $badgeColor;
        $this->dropdownFooterLabel = $dropdownFooterLabel;
        $this->enableDropdownMode = boolval($enableDropdownMode);
        $this->updateCfg = is_array($updateCfg) ? $updateCfg : [];
    }

    /**
     * Make the class attribute for the list item.
     *
     * @return string
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function makeListItemClass() {
=======
    public function makeListItemClass()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeListItemClass() {
>>>>>>> f405739 (up)
=======
    public function makeListItemClass() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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
    public function makeAnchorDefaultAttrs() {
=======
    public function makeAnchorDefaultAttrs()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeAnchorDefaultAttrs() {
>>>>>>> f405739 (up)
=======
    public function makeAnchorDefaultAttrs() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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
    public function makeIconClass() {
=======
    public function makeIconClass()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeIconClass() {
>>>>>>> f405739 (up)
=======
    public function makeIconClass() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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
    public function makeBadgeClass() {
=======
    public function makeBadgeClass()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeBadgeClass() {
>>>>>>> f405739 (up)
=======
    public function makeBadgeClass() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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
    public function makeUpdatePeriod() {
=======
    public function makeUpdatePeriod()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeUpdatePeriod() {
>>>>>>> f405739 (up)
=======
    public function makeUpdatePeriod() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        if (! isset($this->updateCfg['period'])) {
            return 0;
        }

        return (intval($this->updateCfg['period']) ?? 0) * 1000;
    }

    /**
     * Create the url used for fetch new notification data.
     *
     * @return string|null
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function makeUpdateUrl() {
=======
    public function makeUpdateUrl()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeUpdateUrl() {
>>>>>>> f405739 (up)
=======
    public function makeUpdateUrl() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
     * @param string|array $cfg  the configuration for the url
     * @param mixed        $type the configuration type (url or route)
     *
     * @return string|null
     */
    protected function makeUrlFromCfg($cfg, $type = self::CFG_URL) {
<<<<<<< HEAD
=======
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
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        // When config is just a string representing the url or route name,
        // wrap it inside an array.

        $cfg = is_string($cfg) ? [$cfg] : $cfg;

        // Check if config is an array with the url or route name and params.

        if (is_array($cfg) && count($cfg) >= 1) {
            $path = $cfg[0];
            $params = is_array($cfg[1] ?? null) ? $cfg[1] : [];

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            return (self::CFG_ROUTE === $type) ?
=======
            return ($type === self::CFG_ROUTE) ?
>>>>>>> 31d6e3b (first)
=======
            return (self::CFG_ROUTE === $type) ?
>>>>>>> f405739 (up)
=======
            return (self::CFG_ROUTE === $type) ?
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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
        return view('adminlte::components.layout.navbar-notification');
    }
}
