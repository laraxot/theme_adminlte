<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

namespace Themes\AdminLTE\Menu\Filters;

interface FilterInterface {
    /**
     * Transforms a menu item in some way.
     *
     * @param array $item A menu item
     *
=======
=======
declare(strict_types=1);

>>>>>>> f405739 (up)
namespace Themes\AdminLTE\Menu\Filters;

interface FilterInterface {
    /**
     * Transforms a menu item in some way.
     *
<<<<<<< HEAD
     * @param  array  $item  A menu item
>>>>>>> 31d6e3b (first)
=======
     * @param array $item A menu item
     *
>>>>>>> f405739 (up)
     * @return array The transformed menu item
     */
    public function transform($item);
}
