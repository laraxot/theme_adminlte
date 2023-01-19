<?php

declare(strict_types=1);

namespace Themes\AdminLTE\Helpers;

class NavbarItemHelper extends MenuItemHelper {
    /**
     * Check if a menu item is a navbar custom search bar.
     *
     * @param array $item
     *
     * @return bool
     */
    public static function isCustomSearch($item) {
        return isset($item['text'], $item['type']) &&
               'navbar-search' === $item['type'];
    }

    /**
     * Check if a menu item is a navbar fullscreen toggle widget.
     *
     * @param array $item
     *
     * @return bool
     */
    public static function isFullscreen($item) {
        return isset($item['type']) &&
               'fullscreen-widget' === $item['type'];
    }

    /**
     * Check if a menu item is a navbar dark mode toggle widget.
     *
     * @param array $item
     *
     * @return bool
     */
    public static function isDarkmode($item) {
        return isset($item['type']) &&
               'darkmode-widget' === $item['type'];
    }

    /**
     * Check if a menu item is a navbar notification.
     *
     * @param array $item
     *
     * @return bool
     */
    public static function isNotification($item) {
        return isset($item['id'], $item['icon'], $item['type']) &&
               (isset($item['url']) || isset($item['route'])) &&
               'navbar-notification' === $item['type'];
    }

    /**
     * Check if a menu item is a navbar search item (legacy or new).
     *
     * @param array $item
     *
     * @return bool
     */
    public static function isSearch($item) {
        return self::isLegacySearch($item) ||
               self::isCustomSearch($item);
    }

    /**
     * Check if a menu item is accepted for the navbar section.
     *
     * @param array $item
     *
     * @return bool
     */
    public static function isAcceptedItem($item) {
        return self::isNotification($item) ||
               self::isFullscreen($item) ||
               self::isDarkmode($item) ||
               self::isSubmenu($item) ||
               self::isSearch($item) ||
               self::isLink($item);
    }

    /**
     * Check if a menu item is valid for the left section of the navbar.
     *
     * @param array $item
     *
     * @return bool
     */
    public static function isValidLeftItem($item) {
        return self::isAcceptedItem($item) &&
               isset($item['topnav']) &&
               $item['topnav'];
    }

    /**
     * Check if a menu item belongs to the right section of the navbar.
     *
     * @param array $item
     *
     * @return bool
     */
    public static function isValidRightItem($item) {
        return self::isAcceptedItem($item) &&
               isset($item['topnav_right']) &&
               $item['topnav_right'];
    }

    /**
     * Check if a menu item belongs to the user menu section of the navbar.
     *
     * @param array $item
     *
     * @return bool
     */
    public static function isValidUserMenuItem($item) {
        return self::isAcceptedItem($item) &&
               isset($item['topnav_user']) &&
               $item['topnav_user'];
    }
}
