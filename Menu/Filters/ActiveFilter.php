<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

>>>>>>> f405739 (up)
>>>>>>> f617437 (rebase)
namespace Themes\AdminLTE\Menu\Filters;

use Themes\AdminLTE\Helpers\MenuItemHelper;
use Themes\AdminLTE\Menu\ActiveChecker;

<<<<<<< HEAD
class ActiveFilter implements FilterInterface {
=======
<<<<<<< HEAD
<<<<<<< HEAD
class ActiveFilter implements FilterInterface {
=======
class ActiveFilter implements FilterInterface
{
>>>>>>> 31d6e3b (first)
=======
class ActiveFilter implements FilterInterface {
>>>>>>> f405739 (up)
>>>>>>> f617437 (rebase)
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
<<<<<<< HEAD
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
=======
     */
    public function __construct(ActiveChecker $activeChecker) {
>>>>>>> f405739 (up)
>>>>>>> f617437 (rebase)
        $this->activeChecker = $activeChecker;
    }

    /**
     * Transforms a menu item. Adds the active attribute when suitable.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
     * @param array $item A menu item
     *
     * @return array The transformed menu item
     */
    public function transform($item) {
<<<<<<< HEAD
=======
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
>>>>>>> f617437 (rebase)
        if (! MenuItemHelper::isHeader($item)) {
            $item['active'] = $this->activeChecker->isActive($item);
        }

        return $item;
    }
}
