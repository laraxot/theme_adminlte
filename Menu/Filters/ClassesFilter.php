<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
namespace Themes\AdminLTE\Menu\Filters;

use Themes\AdminLTE\Helpers\MenuItemHelper;
use Themes\AdminLTE\Helpers\SidebarItemHelper;

<<<<<<< HEAD
class ClassesFilter implements FilterInterface {
    /**
     * Transforms a menu item. Add particular classes when suitable.
     *
     * @param array $item A menu item
     *
     * @return array The transformed menu item
     */
    public function transform($item) {
=======
class ClassesFilter implements FilterInterface
{
    /**
     * Transforms a menu item. Add particular classes when suitable.
     *
     * @param  array  $item  A menu item
     * @return array The transformed menu item
     */
    public function transform($item)
    {
>>>>>>> 31d6e3b (first)
        $item['class'] = implode(' ', $this->makeClasses($item));

        if (MenuItemHelper::isSubmenu($item)) {
            $item['submenu_class'] = implode(' ', $this->makeSubmenuClasses($item));
        }

        return $item;
    }

    /**
     * Make classes related to the components of a menu item.
     *
<<<<<<< HEAD
     * @param array $item A menu item
     *
     * @return array The array of classes
     */
    protected function makeClasses($item) {
=======
     * @param  array  $item  A menu item
     * @return array The array of classes
     */
    protected function makeClasses($item)
    {
>>>>>>> 31d6e3b (first)
        $classes = [];

        // Add custom classes (from menu item configuration).

        if (! empty($item['classes'])) {
            $classes[] = $item['classes'];
        }

        // Add the active class when the item is active.

        if (! empty($item['active'])) {
            $classes[] = 'active';
        }

        return $classes;
    }

    /**
     * Make classes related to the components of a submenu item.
     *
<<<<<<< HEAD
     * @param array $item A menu item
     *
     * @return array The array of classes
     */
    protected function makeSubmenuClasses($item) {
=======
     * @param  array  $item  A menu item
     * @return array The array of classes
     */
    protected function makeSubmenuClasses($item)
    {
>>>>>>> 31d6e3b (first)
        $classes = [];

        // Add the menu-open class when a sidebar submenu is active. Note we
        // need to add the class to sidebar submenu items only.

        if (SidebarItemHelper::isValidItem($item) && $item['active']) {
            $classes[] = 'menu-open';
        }

        return $classes;
    }
}
