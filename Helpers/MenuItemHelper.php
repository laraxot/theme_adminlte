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
namespace Themes\AdminLTE\Helpers;
=======
namespace Themes\KlekooAdm\Helpers;
>>>>>>> b738e1c (rebase)

/**
 * TODO: On the future, all menu items should have a type property. We can use
 * the type property to easy distinguish the item type and avoid guessing it by
 * they properties.
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        return is_string($item) || isset($item['header']);
    }

    /**
     * Check if a menu item is a link.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
     * @param mixed $item
     *
     * @return bool
     */
    public static function isLink($item) {
<<<<<<< HEAD
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
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        return isset($item['text']) &&
               (isset($item['url']) || isset($item['route']));
    }

    /**
     * Check if a menu item is a submenu.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
     * @param mixed $item
     *
     * @return bool
     */
    public static function isSubmenu($item) {
<<<<<<< HEAD
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
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        return isset($item['text'], $item['submenu']) &&
               is_array($item['submenu']);
    }

    /**
     * Check if a menu item is a legacy search bar.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
     * @param mixed $item
     *
     * @return bool
     */
    public static function isLegacySearch($item) {
<<<<<<< HEAD
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
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        return isset($item['text'], $item['search']) &&
               $item['search'];
    }

    /**
     * Check if a menu item is allowed to be shown (not restricted).
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
     * @param mixed $item
     *
     * @return bool
     */
    public static function isAllowed($item) {
<<<<<<< HEAD
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
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        return $item && empty($item['restricted']);
    }
}
