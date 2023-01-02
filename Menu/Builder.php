<?php

declare(strict_types=1);

namespace Themes\AdminLTE\Menu;

use Exception;
use Illuminate\Support\Arr;
use Themes\AdminLTE\Helpers\MenuItemHelper;

class Builder {
    protected const ADD_AFTER = 0;
    protected const ADD_BEFORE = 1;
    protected const ADD_INSIDE = 2;

    /**
     * The set of menu items.
     *
     * @var array
     */
    public array $menu = [];

    /**
     * The set of filters applied to menu items.
     *
     * @var array
     */
    private $filters;

    /**
     * Constructor.
     */
    public function __construct(array $filters = []) {
        $this->filters = $filters;
    }

    /**
     * Add new items at the end of the menu.
     *
     * @param mixed $newItems Items to be added
     */
    public function add(...$newItems):void {
        $items = $this->transformItems($newItems);

        if (! empty($items)) {
            array_push($this->menu, ...$items);
        }
    }

    /**
     * Add new items after a specific menu item.
     *
     * @param mixed $itemKey  The key that represents the specific menu item
     * @param mixed $newItems Items to be added
     */
    public function addAfter($itemKey, ...$newItems):void {
        $this->addItem($itemKey, self::ADD_AFTER, ...$newItems);
    }

    /**
     * Add new items before a specific menu item.
     *
     * @param mixed $itemKey  The key that represents the specific menu item
     * @param mixed $newItems Items to be added
     */
    public function addBefore($itemKey, ...$newItems):void {
        $this->addItem($itemKey, self::ADD_BEFORE, ...$newItems);
    }

    /**
     * Add new submenu items inside a specific menu item.
     *
     * @param mixed $itemKey  The key that represents the specific menu item
     * @param mixed $newItems Items to be added
     */
    public function addIn($itemKey, ...$newItems):void {
        $this->addItem($itemKey, self::ADD_INSIDE, ...$newItems);
    }

    /**
     * Remove a specific menu item.
     *
     * @param mixed $itemKey The key of the menu item to remove
     */
    public function remove($itemKey):void {
        // Find the specific menu item. Return if not found.

        if (! ($itemPath = $this->findItem($itemKey, $this->menu))) {
            return;
        }

        /**
         * @var array $itemPath
         */
        Arr::forget($this->menu, implode('.', $itemPath));

        // Normalize the menu (remove holes in the numeric indexes).

        /** @var string $holedArrPath */
        $holedArrPath = implode('.', \array_slice($itemPath, 0, -1)) ?: null;
        /** @var array $holedArr */
        $holedArr = Arr::get($this->menu, $holedArrPath, $this->menu);
        if(!is_array($holedArr)){
            throw new Exception('['.__LINE__.']['.__FILE__.']');
        }
        Arr::set($this->menu, $holedArrPath, array_values($holedArr));
    }

    /**
     * Check if exists a menu item with the specified key.
     *
     * @param mixed $itemKey The key of the menu item to check for
     *
     * @return bool
     */
    public function itemKeyExists($itemKey) {
        return (bool) $this->findItem($itemKey, $this->menu);
    }

    /**
     * Transform the items by applying the filters.
     *
     * @param array $items An array with items to be transformed
     *
     * @return array Array with the new transformed items
     */
    protected function transformItems($items) {
        // 130    Parameter #2 $callback of function array_filter expects callable(mixed): mixed, array{'Themes\\AdminLTE\\Helpers\\MenuItemHelper', 'isAllowed'} given.
        return array_filter(
            array_map([$this, 'applyFilters'], $items),
            [MenuItemHelper::class, 'isAllowed']
        );
    }

    /**
     * Find a menu item by the item key and return the path to it.
     *
     * @param mixed $itemKey The key of the item to find
     * @param array $items   The array to look up for the item
     *
     * @return mixed Array with the path sequence, or empty array if not found
     */
    protected function findItem($itemKey, $items) {
        // Look up on all the items.

        foreach ($items as $key => $item) {
            if (isset($item['key']) && $item['key'] === $itemKey) {
                return [$key];
            } elseif (MenuItemHelper::isSubmenu($item)) {
                // Do the recursive call to search on submenu. If we found the
                // item, merge the path with the current one.

              
                if ($subPath = $this->findItem($itemKey, $item['submenu'])) {
                      /** @var array $subPath */
                    return array_merge([$key, 'submenu'], $subPath);
                }
            }
        }

        // Return empty array when the item is not found.

        return [];
    }

    /**
     * Apply all the available filters to a menu item.
     *
     * @param mixed $item A menu item
     *
     * @return mixed A new item with all the filters applied
     */
    protected function applyFilters($item) {
        // Filters are only applied to array type menu items.

        if (! \is_array($item)) {
            return $item;
        }

        // If the item is a submenu, transform all the submenu items first.
        // These items need to be transformed first because some of the submenu
        // filters (like the ActiveFilter) depends on these results.

        if (MenuItemHelper::isSubmenu($item)) {
            $item['submenu'] = $this->transformItems($item['submenu']);
        }

        // Now, apply all the filters on the item.

        foreach ($this->filters as $filter) {
            // If the item is not allowed to be shown, there is no sense to
            // continue applying the filters.

            if (! MenuItemHelper::isAllowed($item)) {
                return $item;
            }

            $item = $filter->transform($item);
        }

        return $item;
    }

    /**
     * Add new items to the menu in a particular place, relative to a
     * specific menu item.
     *
     * @param mixed $itemKey The key that represents the specific menu item
     * @param int   $where   Where to add the new items
     * @param mixed $items   Items to be added
     */
    protected function addItem($itemKey, $where, ...$items):void {
        // Find the specific menu item. Return if not found.

        if (! ($itemPath = $this->findItem($itemKey, $this->menu))) {
            return;
        }

        // Get the target array and add the new items there.

        /** @var array $itemPath */
        $itemKeyIdx = end($itemPath);
        reset($itemPath);

        if (self::ADD_INSIDE === $where) {
            $targetPath = implode('.', array_merge($itemPath, ['submenu']));
            /** @var array $targetArr */
            $targetArr = Arr::get($this->menu, $targetPath, []);
            array_push($targetArr, ...$items);
        } else {
            $targetPath = implode('.', \array_slice($itemPath, 0, -1)) ?: null;
            /** @var array $targetArr */
            $targetArr = Arr::get($this->menu, $targetPath, $this->menu);
            $offset = (self::ADD_AFTER === $where) ? 1 : 0;
            array_splice($targetArr, $itemKeyIdx + $offset, 0, $items);
        }

        Arr::set($this->menu, $targetPath, $targetArr);

        // Apply the filters because the menu now have new items.

        $this->menu = $this->transformItems($this->menu);
    }
}