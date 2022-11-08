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

use Illuminate\Contracts\Auth\Access\Gate;

<<<<<<< HEAD
class GateFilter implements FilterInterface {
=======
<<<<<<< HEAD
<<<<<<< HEAD
class GateFilter implements FilterInterface {
=======
class GateFilter implements FilterInterface
{
>>>>>>> 31d6e3b (first)
=======
class GateFilter implements FilterInterface {
>>>>>>> f405739 (up)
>>>>>>> f617437 (rebase)
    /**
     * The Laravel gate instance, used to check for permissions.
     *
     * @var Gate
     */
    protected $gate;

    /**
     * Constructor.
<<<<<<< HEAD
     */
    public function __construct(Gate $gate) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function __construct(Gate $gate) {
=======
     *
     * @param  Gate  $gate
     */
    public function __construct(Gate $gate)
    {
>>>>>>> 31d6e3b (first)
=======
     */
    public function __construct(Gate $gate) {
>>>>>>> f405739 (up)
>>>>>>> f617437 (rebase)
        $this->gate = $gate;
    }

    /**
     * Transforms a menu item. Add the restricted property to a menu item
     * when situable.
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
        // Set a special attribute when item is not allowed. Items with this
        // attribute will be filtered out of the menu.

        if (! $this->isAllowed($item)) {
            $item['restricted'] = true;
        }

        return $item;
    }

    /**
     * Check if a menu item is allowed for the current user.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
     * @param array $item A menu item
     *
     * @return bool
     */
    protected function isAllowed($item) {
<<<<<<< HEAD
=======
=======
     * @param  array  $item  A menu item
     * @return bool
     */
    protected function isAllowed($item)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param array $item A menu item
     *
     * @return bool
     */
    protected function isAllowed($item) {
>>>>>>> f405739 (up)
>>>>>>> f617437 (rebase)
        // Check if there are any permission defined for the item.

        if (empty($item['can'])) {
            return true;
        }

        // Read the extra arguments (a db model instance can be used).

        $args = isset($item['model']) ? $item['model'] : [];

        // Check if the current user can perform the configured permissions.

        if (\is_string($item['can']) || \is_array($item['can'])) {
            return $this->gate->any($item['can'], $args);
        }

        return true;
    }
}
