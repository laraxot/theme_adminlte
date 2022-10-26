<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

>>>>>>> f405739 (up)
=======
declare(strict_types=1);

>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
namespace Themes\AdminLTE\Menu\Filters;
=======
namespace Themes\KlekooAdm\Menu\Filters;
>>>>>>> b738e1c (rebase)
=======
namespace Themes\AdminLTE\Menu\Filters;
>>>>>>> 63c2c43 (up)
=======
namespace Themes\KlekooAdm\Menu\Filters;
>>>>>>> 8a5cc0b (.)

use Themes\KlekooAdm\Helpers\MenuItemHelper;
use Themes\KlekooAdm\Helpers\SidebarItemHelper;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
class ClassesFilter implements FilterInterface {
    /**
     * Transforms a menu item. Add particular classes when suitable.
     *
     * @param array $item A menu item
     *
     * @return array The transformed menu item
     */
    public function transform($item) {
<<<<<<< HEAD
=======
class ClassesFilter implements FilterInterface
{
=======
class ClassesFilter implements FilterInterface {
>>>>>>> f405739 (up)
    /**
     * Transforms a menu item. Add particular classes when suitable.
     *
     * @param array $item A menu item
     *
     * @return array The transformed menu item
     */
<<<<<<< HEAD
    public function transform($item)
    {
>>>>>>> 31d6e3b (first)
=======
    public function transform($item) {
>>>>>>> f405739 (up)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
     * @param array $item A menu item
     *
     * @return array The array of classes
     */
    protected function makeClasses($item) {
<<<<<<< HEAD
=======
     * @param  array  $item  A menu item
     * @return array The array of classes
     */
    protected function makeClasses($item)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param array $item A menu item
     *
     * @return array The array of classes
     */
    protected function makeClasses($item) {
>>>>>>> f405739 (up)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
     * @param array $item A menu item
     *
     * @return array The array of classes
     */
    protected function makeSubmenuClasses($item) {
<<<<<<< HEAD
=======
     * @param  array  $item  A menu item
     * @return array The array of classes
     */
    protected function makeSubmenuClasses($item)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param array $item A menu item
     *
     * @return array The array of classes
     */
    protected function makeSubmenuClasses($item) {
>>>>>>> f405739 (up)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        $classes = [];

        // Add the menu-open class when a sidebar submenu is active. Note we
        // need to add the class to sidebar submenu items only.

        if (SidebarItemHelper::isValidItem($item) && $item['active']) {
            $classes[] = 'menu-open';
        }

        return $classes;
    }
}
