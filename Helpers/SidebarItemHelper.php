<?php

declare(strict_types=1);

namespace Themes\AdminLTE\Helpers;

class SidebarItemHelper extends MenuItemHelper
{
    /**
     * Check if a menu item is a sidebar custom search bar.
     *
     * @param array $item
     *
     * @return bool
     */
    public static function isCustomSearch($item)
    {
        return isset($item['text'], $item['type']) &&
               'sidebar-custom-search' === $item['type'];
    }

    /**
     * Check if a menu item is a sidebar menu search bar.
     *
     * @param array $item
     *
     * @return bool
     */
    public static function isMenuSearch($item)
    {
        return isset($item['text'], $item['type']) &&
               'sidebar-menu-search' === $item['type'];
    }

    /**
     * Check if a menu item is a sidebar search item (legacy or new).
     *
     * @param array $item
     *
     * @return bool
     */
    public static function isSearch($item)
    {
        return self::isLegacySearch($item) ||
               self::isCustomSearch($item) ||
               self::isMenuSearch($item);
    }

    /**
     * Check if a menu item is accepted for the sidebar section.
     *
     * @param array $item
     *
     * @return bool
     */
    public static function isAcceptedItem($item)
    {
        return self::isSubmenu($item) ||
               self::isSearch($item) ||
               self::isHeader($item) ||
               self::isLink($item);
    }

    /**
     * Check if a menu item is valid for the sidebar.
     *
     * @param array $item
     *
     * @return bool
     */
    public static function isValidItem($item)
    {
        return self::isAcceptedItem($item) &&
               empty($item['topnav_right']) &&
               empty($item['topnav_user']) &&
               empty($item['topnav']);
    }
}
