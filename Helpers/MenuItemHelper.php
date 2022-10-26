<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
namespace Themes\AdminLTE\Helpers;

/**
 * TODO: On the future, all menu items should have a type property. We can use
 * the type property to easy distinguish the item type and avoid guessing it by
 * they properties.
 */
<<<<<<< HEAD
class MenuItemHelper {
    /**
     * Check if a menu item is a header.
     *
     * @param mixed $item
     *
     * @return bool
     */
    public static function isHeader($item) {
=======
class MenuItemHelper
{
    /**
     * Check if a menu item is a header.
     *
     * @param  mixed  $item
     * @return bool
     */
    public static function isHeader($item)
    {
>>>>>>> 31d6e3b (first)
        return is_string($item) || isset($item['header']);
    }

    /**
     * Check if a menu item is a link.
     *
<<<<<<< HEAD
     * @param mixed $item
     *
     * @return bool
     */
    public static function isLink($item) {
=======
     * @param  mixed  $item
     * @return bool
     */
    public static function isLink($item)
    {
>>>>>>> 31d6e3b (first)
        return isset($item['text']) &&
               (isset($item['url']) || isset($item['route']));
    }

    /**
     * Check if a menu item is a submenu.
     *
<<<<<<< HEAD
     * @param mixed $item
     *
     * @return bool
     */
    public static function isSubmenu($item) {
=======
     * @param  mixed  $item
     * @return bool
     */
    public static function isSubmenu($item)
    {
>>>>>>> 31d6e3b (first)
        return isset($item['text'], $item['submenu']) &&
               is_array($item['submenu']);
    }

    /**
     * Check if a menu item is a legacy search bar.
     *
<<<<<<< HEAD
     * @param mixed $item
     *
     * @return bool
     */
    public static function isLegacySearch($item) {
=======
     * @param  mixed  $item
     * @return bool
     */
    public static function isLegacySearch($item)
    {
>>>>>>> 31d6e3b (first)
        return isset($item['text'], $item['search']) &&
               $item['search'];
    }

    /**
     * Check if a menu item is allowed to be shown (not restricted).
     *
<<<<<<< HEAD
     * @param mixed $item
     *
     * @return bool
     */
    public static function isAllowed($item) {
=======
     * @param  mixed  $item
     * @return bool
     */
    public static function isAllowed($item)
    {
>>>>>>> 31d6e3b (first)
        return $item && empty($item['restricted']);
    }
}
