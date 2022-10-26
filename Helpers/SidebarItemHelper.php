<?php

<<<<<<< HEAD
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
=======
declare(strict_types=1);

>>>>>>> f405739 (up)
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
<<<<<<< HEAD
               $item['type'] === 'sidebar-custom-search';
>>>>>>> 31d6e3b (first)
=======
               'sidebar-custom-search' === $item['type'];
>>>>>>> f405739 (up)
    }

    /**
     * Check if a menu item is a sidebar menu search bar.
     *
<<<<<<< HEAD
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
=======
     * @param mixed $item
     *
>>>>>>> f405739 (up)
     * @return bool
     */
    public static function isMenuSearch($item) {
        return isset($item['text'], $item['type']) &&
<<<<<<< HEAD
               $item['type'] === 'sidebar-menu-search';
>>>>>>> 31d6e3b (first)
=======
               'sidebar-menu-search' === $item['type'];
>>>>>>> f405739 (up)
    }

    /**
     * Check if a menu item is a sidebar search item (legacy or new).
     *
<<<<<<< HEAD
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
=======
     * @param mixed $item
     *
     * @return bool
     */
    public static function isSearch($item) {
>>>>>>> f405739 (up)
        return self::isLegacySearch($item) ||
               self::isCustomSearch($item) ||
               self::isMenuSearch($item);
    }

    /**
     * Check if a menu item is accepted for the sidebar section.
     *
<<<<<<< HEAD
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
=======
     * @param mixed $item
     *
     * @return bool
     */
    public static function isAcceptedItem($item) {
>>>>>>> f405739 (up)
        return self::isSubmenu($item) ||
               self::isSearch($item) ||
               self::isHeader($item) ||
               self::isLink($item);
    }

    /**
     * Check if a menu item is valid for the sidebar.
     *
<<<<<<< HEAD
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
=======
     * @param mixed $item
     *
     * @return bool
     */
    public static function isValidItem($item) {
>>>>>>> f405739 (up)
        return self::isAcceptedItem($item) &&
               empty($item['topnav_right']) &&
               empty($item['topnav_user']) &&
               empty($item['topnav']);
    }
}
