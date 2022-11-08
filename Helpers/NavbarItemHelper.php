<?php

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
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
<<<<<<< HEAD
=======
=======
=======
declare(strict_types=1);

>>>>>>> f405739 (up)
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
<<<<<<< HEAD
               $item['type'] === 'navbar-search';
>>>>>>> 31d6e3b (first)
=======
               'navbar-search' === $item['type'];
>>>>>>> f405739 (up)
>>>>>>> f617437 (rebase)
    }

    /**
     * Check if a menu item is a navbar fullscreen toggle widget.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
     * @param mixed $item
     *
     * @return bool
     */
    public static function isFullscreen($item) {
        return isset($item['type']) &&
               'fullscreen-widget' === $item['type'];
<<<<<<< HEAD
=======
=======
     * @param  mixed  $item
=======
     * @param mixed $item
     *
>>>>>>> f405739 (up)
     * @return bool
     */
    public static function isFullscreen($item) {
        return isset($item['type']) &&
<<<<<<< HEAD
               $item['type'] === 'fullscreen-widget';
>>>>>>> 31d6e3b (first)
=======
               'fullscreen-widget' === $item['type'];
>>>>>>> f405739 (up)
>>>>>>> f617437 (rebase)
    }

    /**
     * Check if a menu item is a navbar dark mode toggle widget.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
     * @param mixed $item
     *
     * @return bool
     */
    public static function isDarkmode($item) {
        return isset($item['type']) &&
               'darkmode-widget' === $item['type'];
<<<<<<< HEAD
=======
=======
     * @param  mixed  $item
=======
     * @param mixed $item
     *
>>>>>>> f405739 (up)
     * @return bool
     */
    public static function isDarkmode($item) {
        return isset($item['type']) &&
<<<<<<< HEAD
               $item['type'] === 'darkmode-widget';
>>>>>>> 31d6e3b (first)
=======
               'darkmode-widget' === $item['type'];
>>>>>>> f405739 (up)
>>>>>>> f617437 (rebase)
    }

    /**
     * Check if a menu item is a navbar notification.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
     * @param mixed $item
     *
     * @return bool
     */
    public static function isNotification($item) {
        return isset($item['id'], $item['icon'], $item['type']) &&
               (isset($item['url']) || isset($item['route'])) &&
               'navbar-notification' === $item['type'];
<<<<<<< HEAD
=======
=======
     * @param  mixed  $item
=======
     * @param mixed $item
     *
>>>>>>> f405739 (up)
     * @return bool
     */
    public static function isNotification($item) {
        return isset($item['id'], $item['icon'], $item['type']) &&
               (isset($item['url']) || isset($item['route'])) &&
<<<<<<< HEAD
               $item['type'] === 'navbar-notification';
>>>>>>> 31d6e3b (first)
=======
               'navbar-notification' === $item['type'];
>>>>>>> f405739 (up)
>>>>>>> f617437 (rebase)
    }

    /**
     * Check if a menu item is a navbar search item (legacy or new).
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
     * @param mixed $item
     *
     * @return bool
     */
    public static function isSearch($item) {
<<<<<<< HEAD
=======
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
>>>>>>> f617437 (rebase)
        return self::isLegacySearch($item) ||
               self::isCustomSearch($item);
    }

    /**
     * Check if a menu item is accepted for the navbar section.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
     * @param mixed $item
     *
     * @return bool
     */
    public static function isAcceptedItem($item) {
<<<<<<< HEAD
=======
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
>>>>>>> f617437 (rebase)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
     * @param mixed $item
     *
     * @return bool
     */
    public static function isValidLeftItem($item) {
<<<<<<< HEAD
=======
=======
     * @param  mixed  $item
     * @return bool
     */
    public static function isValidLeftItem($item)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param mixed $item
     *
     * @return bool
     */
    public static function isValidLeftItem($item) {
>>>>>>> f405739 (up)
>>>>>>> f617437 (rebase)
        return self::isAcceptedItem($item) &&
               isset($item['topnav']) &&
               $item['topnav'];
    }

    /**
     * Check if a menu item belongs to the right section of the navbar.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
     * @param mixed $item
     *
     * @return bool
     */
    public static function isValidRightItem($item) {
<<<<<<< HEAD
=======
=======
     * @param  mixed  $item
     * @return bool
     */
    public static function isValidRightItem($item)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param mixed $item
     *
     * @return bool
     */
    public static function isValidRightItem($item) {
>>>>>>> f405739 (up)
>>>>>>> f617437 (rebase)
        return self::isAcceptedItem($item) &&
               isset($item['topnav_right']) &&
               $item['topnav_right'];
    }

    /**
     * Check if a menu item belongs to the user menu section of the navbar.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
     * @param mixed $item
     *
     * @return bool
     */
    public static function isValidUserMenuItem($item) {
<<<<<<< HEAD
=======
=======
     * @param  mixed  $item
     * @return bool
     */
    public static function isValidUserMenuItem($item)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param mixed $item
     *
     * @return bool
     */
    public static function isValidUserMenuItem($item) {
>>>>>>> f405739 (up)
>>>>>>> f617437 (rebase)
        return self::isAcceptedItem($item) &&
               isset($item['topnav_user']) &&
               $item['topnav_user'];
    }
}
