<?php

<<<<<<< HEAD
declare(strict_types=1);

namespace Themes\AdminLTE\Helpers;

class NavbarItemHelper extends MenuItemHelper {
    /**
     * Check if a menu item is a navbar custom search bar.
     *
     * @param mixed $item
     *
     * @return bool
     */
    public static function isCustomSearch($item) {
        return isset($item['text'], $item['type']) &&
               'navbar-search' === $item['type'];
=======
namespace Themes\AdminLTE\Helpers;

class NavbarItemHelper extends MenuItemHelper
{
    /**
     * Check if a menu item is a navbar custom search bar.
     *
     * @param  mixed  $item
     * @return bool
     */
    public static function isCustomSearch($item)
    {
        return isset($item['text'], $item['type']) &&
               $item['type'] === 'navbar-search';
>>>>>>> 31d6e3b (first)
    }

    /**
     * Check if a menu item is a navbar fullscreen toggle widget.
     *
<<<<<<< HEAD
     * @param mixed $item
     *
     * @return bool
     */
    public static function isFullscreen($item) {
        return isset($item['type']) &&
               'fullscreen-widget' === $item['type'];
=======
     * @param  mixed  $item
     * @return bool
     */
    public static function isFullscreen($item)
    {
        return isset($item['type']) &&
               $item['type'] === 'fullscreen-widget';
>>>>>>> 31d6e3b (first)
    }

    /**
     * Check if a menu item is a navbar dark mode toggle widget.
     *
<<<<<<< HEAD
     * @param mixed $item
     *
     * @return bool
     */
    public static function isDarkmode($item) {
        return isset($item['type']) &&
               'darkmode-widget' === $item['type'];
=======
     * @param  mixed  $item
     * @return bool
     */
    public static function isDarkmode($item)
    {
        return isset($item['type']) &&
               $item['type'] === 'darkmode-widget';
>>>>>>> 31d6e3b (first)
    }

    /**
     * Check if a menu item is a navbar notification.
     *
<<<<<<< HEAD
     * @param mixed $item
     *
     * @return bool
     */
    public static function isNotification($item) {
        return isset($item['id'], $item['icon'], $item['type']) &&
               (isset($item['url']) || isset($item['route'])) &&
               'navbar-notification' === $item['type'];
=======
     * @param  mixed  $item
     * @return bool
     */
    public static function isNotification($item)
    {
        return isset($item['id'], $item['icon'], $item['type']) &&
               (isset($item['url']) || isset($item['route'])) &&
               $item['type'] === 'navbar-notification';
>>>>>>> 31d6e3b (first)
    }

    /**
     * Check if a menu item is a navbar search item (legacy or new).
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
               self::isCustomSearch($item);
    }

    /**
     * Check if a menu item is accepted for the navbar section.
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
<<<<<<< HEAD
     * @param mixed $item
     *
     * @return bool
     */
    public static function isValidLeftItem($item) {
=======
     * @param  mixed  $item
     * @return bool
     */
    public static function isValidLeftItem($item)
    {
>>>>>>> 31d6e3b (first)
        return self::isAcceptedItem($item) &&
               isset($item['topnav']) &&
               $item['topnav'];
    }

    /**
     * Check if a menu item belongs to the right section of the navbar.
     *
<<<<<<< HEAD
     * @param mixed $item
     *
     * @return bool
     */
    public static function isValidRightItem($item) {
=======
     * @param  mixed  $item
     * @return bool
     */
    public static function isValidRightItem($item)
    {
>>>>>>> 31d6e3b (first)
        return self::isAcceptedItem($item) &&
               isset($item['topnav_right']) &&
               $item['topnav_right'];
    }

    /**
     * Check if a menu item belongs to the user menu section of the navbar.
     *
<<<<<<< HEAD
     * @param mixed $item
     *
     * @return bool
     */
    public static function isValidUserMenuItem($item) {
=======
     * @param  mixed  $item
     * @return bool
     */
    public static function isValidUserMenuItem($item)
    {
>>>>>>> 31d6e3b (first)
        return self::isAcceptedItem($item) &&
               isset($item['topnav_user']) &&
               $item['topnav_user'];
    }
}
