<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

>>>>>>> f405739 (up)
namespace Themes\AdminLTE\Helpers;

/**
 * TODO: On the future, all menu items should have a type property. We can use
 * the type property to easy distinguish the item type and avoid guessing it by
 * they properties.
 */
<<<<<<< HEAD
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
=======
class MenuItemHelper {
>>>>>>> f405739 (up)
    /**
     * Check if a menu item is a header.
     *
     * @param mixed $item
     *
     * @return bool
     */
<<<<<<< HEAD
    public static function isHeader($item)
    {
>>>>>>> 31d6e3b (first)
=======
    public static function isHeader($item) {
>>>>>>> f405739 (up)
        return is_string($item) || isset($item['header']);
    }

    /**
     * Check if a menu item is a link.
     *
<<<<<<< HEAD
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
=======
     * @param mixed $item
     *
     * @return bool
     */
    public static function isLink($item) {
>>>>>>> f405739 (up)
        return isset($item['text']) &&
               (isset($item['url']) || isset($item['route']));
    }

    /**
     * Check if a menu item is a submenu.
     *
<<<<<<< HEAD
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
=======
     * @param mixed $item
     *
     * @return bool
     */
    public static function isSubmenu($item) {
>>>>>>> f405739 (up)
        return isset($item['text'], $item['submenu']) &&
               is_array($item['submenu']);
    }

    /**
     * Check if a menu item is a legacy search bar.
     *
<<<<<<< HEAD
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
=======
     * @param mixed $item
     *
     * @return bool
     */
    public static function isLegacySearch($item) {
>>>>>>> f405739 (up)
        return isset($item['text'], $item['search']) &&
               $item['search'];
    }

    /**
     * Check if a menu item is allowed to be shown (not restricted).
     *
<<<<<<< HEAD
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
=======
     * @param mixed $item
     *
     * @return bool
     */
    public static function isAllowed($item) {
>>>>>>> f405739 (up)
        return $item && empty($item['restricted']);
    }
}
