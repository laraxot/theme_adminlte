<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

>>>>>>> f405739 (up)
>>>>>>> f617437 (rebase)
namespace Themes\AdminLTE\Helpers;

/**
 * TODO: On the future, all menu items should have a type property. We can use
 * the type property to easy distinguish the item type and avoid guessing it by
 * they properties.
 */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
class MenuItemHelper {
    /**
     * Check if a menu item is a header.
     *
     * @param mixed $item
     *
     * @return bool
     */
    public static function isHeader($item) {
<<<<<<< HEAD
        return \is_string($item) || isset($item['header']);
=======
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
>>>>>>> f617437 (rebase)
    }

    /**
     * Check if a menu item is a link.
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
    public static function isLink($item) {
<<<<<<< HEAD
=======
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
>>>>>>> f617437 (rebase)
        return isset($item['text']) &&
               (isset($item['url']) || isset($item['route']));
    }

    /**
     * Check if a menu item is a submenu.
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
    public static function isSubmenu($item) {
<<<<<<< HEAD
=======
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
>>>>>>> f617437 (rebase)
        return isset($item['text'], $item['submenu']) &&
               \is_array($item['submenu']);
    }

    /**
     * Check if a menu item is a legacy search bar.
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
    public static function isLegacySearch($item) {
<<<<<<< HEAD
=======
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
>>>>>>> f617437 (rebase)
        return isset($item['text'], $item['search']) &&
               $item['search'];
    }

    /**
     * Check if a menu item is allowed to be shown (not restricted).
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
    public static function isAllowed($item) {
<<<<<<< HEAD
=======
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
>>>>>>> f617437 (rebase)
        return $item && empty($item['restricted']);
    }
}
