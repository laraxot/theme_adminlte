<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Themes\AdminLTE\Helpers;
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
namespace Themes\AdminLTE\Helpers;
=======
namespace Themes\KlekooAdm\Helpers;
>>>>>>> b738e1c (rebase)
=======
namespace Themes\AdminLTE\Helpers;
>>>>>>> 63c2c43 (up)
=======
namespace Themes\KlekooAdm\Helpers;
>>>>>>> 8a5cc0b (.)
<<<<<<< HEAD
>>>>>>> b6bf7b3 (rebase)
=======
=======
namespace Themes\AdminLTE\Helpers;
>>>>>>> 5b4054a (.)
>>>>>>> 4ab624f (rebase)

/**
 * TODO: On the future, all menu items should have a type property. We can use
 * the type property to easy distinguish the item type and avoid guessing it by
 * they properties.
 */
class MenuItemHelper {
    /**
     * Check if a menu item is a header.
     *
     * @param mixed $item
     *
     * @return bool
     */
    public static function isHeader($item) {
        return \is_string($item) || isset($item['header']);
    }

    /**
     * Check if a menu item is a link.
     *
     * @param mixed $item
     *
     * @return bool
     */
    public static function isLink($item) {
        return isset($item['text']) &&
               (isset($item['url']) || isset($item['route']));
    }

    /**
     * Check if a menu item is a submenu.
     *
     * @param mixed $item
     *
     * @return bool
     */
    public static function isSubmenu($item) {
        return isset($item['text'], $item['submenu']) &&
               \is_array($item['submenu']);
    }

    /**
     * Check if a menu item is a legacy search bar.
     *
     * @param mixed $item
     *
     * @return bool
     */
    public static function isLegacySearch($item) {
        return isset($item['text'], $item['search']) &&
               $item['search'];
    }

    /**
     * Check if a menu item is allowed to be shown (not restricted).
     *
     * @param mixed $item
     *
     * @return bool
     */
    public static function isAllowed($item) {
        return $item && empty($item['restricted']);
    }
}
