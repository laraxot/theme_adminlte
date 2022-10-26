<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
namespace Themes\AdminLTE\Menu\Filters;

use Themes\AdminLTE\Helpers\MenuItemHelper;
use Themes\AdminLTE\Menu\ActiveChecker;

<<<<<<< HEAD
class ActiveFilter implements FilterInterface {
=======
class ActiveFilter implements FilterInterface
{
>>>>>>> 31d6e3b (first)
    /**
     * The active checker instance.
     *
     * @var ActiveChecker
     */
    protected $activeChecker;

    /**
     * Constructor.
<<<<<<< HEAD
     */
    public function __construct(ActiveChecker $activeChecker) {
=======
     *
     * @param  ActiveChecker  $activeChecker
     */
    public function __construct(ActiveChecker $activeChecker)
    {
>>>>>>> 31d6e3b (first)
        $this->activeChecker = $activeChecker;
    }

    /**
     * Transforms a menu item. Adds the active attribute when suitable.
     *
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
        if (! MenuItemHelper::isHeader($item)) {
            $item['active'] = $this->activeChecker->isActive($item);
        }

        return $item;
    }
}
