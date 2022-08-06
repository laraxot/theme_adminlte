<?php

declare(strict_types=1);

namespace Themes\KlekooAdm\Menu\Filters;

use Themes\KlekooAdm\Helpers\MenuItemHelper;
use Themes\KlekooAdm\Menu\ActiveChecker;

class ActiveFilter implements FilterInterface {
    /**
     * The active checker instance.
     *
     * @var ActiveChecker
     */
    protected $activeChecker;

    /**
     * Constructor.
     */
    public function __construct(ActiveChecker $activeChecker) {
        $this->activeChecker = $activeChecker;
    }

    /**
     * Transforms a menu item. Adds the active attribute when suitable.
     *
     * @param array $item A menu item
     *
     * @return array The transformed menu item
     */
    public function transform($item) {
        if (! MenuItemHelper::isHeader($item)) {
            $item['active'] = $this->activeChecker->isActive($item);
        }

        return $item;
    }
}
