<?php

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> cf3e396 (rebase)
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
>>>>>>> cf4e5c1 (rebase)
=======
=======
declare(strict_types=1);

>>>>>>> d79d738 (up)
>>>>>>> cf3e396 (rebase)
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
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
class ActiveFilter implements FilterInterface {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
=======
class ActiveFilter implements FilterInterface {
>>>>>>> d79d738 (up)
>>>>>>> cf3e396 (rebase)
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
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
     */
    public function __construct(ActiveChecker $activeChecker) {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
=======
     */
    public function __construct(ActiveChecker $activeChecker) {
>>>>>>> d79d738 (up)
>>>>>>> cf3e396 (rebase)
        $this->activeChecker = $activeChecker;
    }

    /**
     * Transforms a menu item. Adds the active attribute when suitable.
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
>>>>>>> cf3e396 (rebase)
     * @param array $item A menu item
     *
     * @return array The transformed menu item
     */
    public function transform($item) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 905478d (rebase)
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
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
=======
>>>>>>> d79d738 (up)
>>>>>>> cf3e396 (rebase)
        if (! MenuItemHelper::isHeader($item)) {
            $item['active'] = $this->activeChecker->isActive($item);
        }

        return $item;
    }
}
