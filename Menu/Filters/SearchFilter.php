<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

>>>>>>> f405739 (up)
namespace Themes\AdminLTE\Menu\Filters;

use Themes\AdminLTE\Helpers\NavbarItemHelper;
use Themes\AdminLTE\Helpers\SidebarItemHelper;

<<<<<<< HEAD
<<<<<<< HEAD
class SearchFilter implements FilterInterface {
=======
class SearchFilter implements FilterInterface
{
>>>>>>> 31d6e3b (first)
=======
class SearchFilter implements FilterInterface {
>>>>>>> f405739 (up)
    /**
     * The default name attribute to be used on the search input.
     *
     * @var string
     */
    protected $defInputName = 'adminlteSearch';

    /**
     * The default method attribute to be used on the search input.
     *
     * @var string
     */
    protected $defMethod = 'get';

    /**
     * Transforms a menu item. Makes the proper search bar configuration.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array $item A menu item
     *
     * @return array The transformed menu item
     */
    public function transform($item) {
=======
     * @param  array  $item  A menu item
     * @return array The transformed menu item
     */
    public function transform($item)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param array $item A menu item
     *
     * @return array The transformed menu item
     */
    public function transform($item) {
>>>>>>> f405739 (up)
        $isSearch = NavbarItemHelper::isSearch($item) ||
                    SidebarItemHelper::isSearch($item);

        if (! $isSearch) {
            return $item;
        }

        // Configure search bar method.

        if (! isset($item['method'])) {
            $item['method'] = $this->defMethod;
        } elseif (! in_array(strtolower($item['method']), ['post', 'get'])) {
            $item['method'] = $this->defMethod;
        }

        // Configure search bar input name.

        if (! isset($item['input_name'])) {
            $item['input_name'] = $this->defInputName;
        }

        return $item;
    }
}
