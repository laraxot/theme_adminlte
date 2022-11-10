<?php

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
declare(strict_types=1);

<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
declare(strict_types=1);

>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
>>>>>>> 312af933 (rebase)
=======
=======
declare(strict_types=1);

>>>>>>> d79d738 (up)
>>>>>>> a05b3ba1 (rebase)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
=======
>>>>>>> d79d738 (up)
>>>>>>> a05b3ba1 (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return \is_string($item) || isset($item['header']);
=======
=======
>>>>>>> 905478d (rebase)
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
=======
>>>>>>> d79d738 (up)
        return is_string($item) || isset($item['header']);
>>>>>>> f617437 (rebase)
>>>>>>> a05b3ba1 (rebase)
    }

    /**
     * Check if a menu item is a link.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
=======
>>>>>>> d79d738 (up)
>>>>>>> a05b3ba1 (rebase)
     * @param mixed $item
     *
     * @return bool
     */
    public static function isLink($item) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 905478d (rebase)
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
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
=======
>>>>>>> d79d738 (up)
>>>>>>> a05b3ba1 (rebase)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
=======
>>>>>>> d79d738 (up)
>>>>>>> a05b3ba1 (rebase)
     * @param mixed $item
     *
     * @return bool
     */
    public static function isSubmenu($item) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 905478d (rebase)
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
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
=======
>>>>>>> d79d738 (up)
>>>>>>> a05b3ba1 (rebase)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
=======
>>>>>>> d79d738 (up)
>>>>>>> a05b3ba1 (rebase)
     * @param mixed $item
     *
     * @return bool
     */
    public static function isLegacySearch($item) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 905478d (rebase)
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
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
=======
>>>>>>> d79d738 (up)
>>>>>>> a05b3ba1 (rebase)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
=======
>>>>>>> d79d738 (up)
>>>>>>> a05b3ba1 (rebase)
     * @param mixed $item
     *
     * @return bool
     */
    public static function isAllowed($item) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 905478d (rebase)
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
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
=======
>>>>>>> d79d738 (up)
>>>>>>> a05b3ba1 (rebase)
        return $item && empty($item['restricted']);
    }
}
