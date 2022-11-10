<?php

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
>>>>>>> 312af933 (rebase)
namespace Themes\AdminLTE\Menu\Filters;
=======
namespace Themes\KlekooAdm\Menu\Filters;
>>>>>>> b738e1c (rebase)
=======
namespace Themes\AdminLTE\Menu\Filters;
>>>>>>> 63c2c43 (up)

use Themes\AdminLTE\Helpers\NavbarItemHelper;
use Themes\AdminLTE\Helpers\SidebarItemHelper;

class SearchFilter implements FilterInterface {
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
     * @param array $item A menu item
     *
     * @return array The transformed menu item
     */
    public function transform($item) {
        $isSearch = NavbarItemHelper::isSearch($item) ||
                    SidebarItemHelper::isSearch($item);

        if (! $isSearch) {
            return $item;
        }

        // Configure search bar method.

        if (! isset($item['method'])) {
            $item['method'] = $this->defMethod;
        } elseif (! \in_array(strtolower($item['method']), ['post', 'get'], true)) {
            $item['method'] = $this->defMethod;
        }

        // Configure search bar input name.

        if (! isset($item['input_name'])) {
            $item['input_name'] = $this->defInputName;
        }

        return $item;
    }
}
