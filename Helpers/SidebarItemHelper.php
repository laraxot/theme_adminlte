<?php

<<<<<<< HEAD
declare(strict_types=1);

namespace Themes\AdminLTE\Helpers;

class SidebarItemHelper extends MenuItemHelper {
    /**
     * Check if a menu item is a sidebar custom search bar.
     *
     * @param mixed $item
     *
     * @return bool
     */
    public static function isCustomSearch($item) {
        return isset($item['text'], $item['type']) &&
               'sidebar-custom-search' === $item['type'];
=======
namespace Themes\AdminLTE\Helpers;

class SidebarItemHelper extends MenuItemHelper
{
    /**
     * Check if a menu item is a sidebar custom search bar.
     *
     * @param  mixed  $item
     * @return bool
     */
    public static function isCustomSearch($item)
    {
        return isset($item['text'], $item['type']) &&
               $item['type'] === 'sidebar-custom-search';
>>>>>>> 31d6e3b (first)
    }

    /**
     * Check if a menu item is a sidebar menu search bar.
     *
<<<<<<< HEAD
     * @param mixed $item
     *
     * @return bool
     */
    public static function isMenuSearch($item) {
        return isset($item['text'], $item['type']) &&
               'sidebar-menu-search' === $item['type'];
=======
     * @param  mixed  $item
     * @return bool
     */
    public static function isMenuSearch($item)
    {
        return isset($item['text'], $item['type']) &&
               $item['type'] === 'sidebar-menu-search';
>>>>>>> 31d6e3b (first)
    }

    /**
     * Check if a menu item is a sidebar search item (legacy or new).
     *
<<<<<<< HEAD
     * @param mixed $item
     *
     * @return bool
     */
    public static function isSearch($item) {
=======
     * @param  mixed  $item
     * @return bool
     */
    public static function isSearch($item)
    {
>>>>>>> 31d6e3b (first)
        return self::isLegacySearch($item) ||
               self::isCustomSearch($item) ||
               self::isMenuSearch($item);
    }

    /**
     * Check if a menu item is accepted for the sidebar section.
     *
<<<<<<< HEAD
     * @param mixed $item
     *
     * @return bool
     */
    public static function isAcceptedItem($item) {
=======
     * @param  mixed  $item
     * @return bool
     */
    public static function isAcceptedItem($item)
    {
>>>>>>> 31d6e3b (first)
        return self::isSubmenu($item) ||
               self::isSearch($item) ||
               self::isHeader($item) ||
               self::isLink($item);
    }

    /**
     * Check if a menu item is valid for the sidebar.
     *
<<<<<<< HEAD
     * @param mixed $item
     *
     * @return bool
     */
    public static function isValidItem($item) {
=======
     * @param  mixed  $item
     * @return bool
     */
    public static function isValidItem($item)
    {
>>>>>>> 31d6e3b (first)
        return self::isAcceptedItem($item) &&
               empty($item['topnav_right']) &&
               empty($item['topnav_user']) &&
               empty($item['topnav']);
    }
}
