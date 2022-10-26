<?php

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
namespace Themes\AdminLTE\Menu\Filters;

interface FilterInterface
{
    /**
     * Transforms a menu item in some way.
     *
     * @param  array  $item  A menu item
>>>>>>> 31d6e3b (first)
     * @return array The transformed menu item
     */
    public function transform($item);
}
