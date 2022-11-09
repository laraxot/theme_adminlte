<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Themes\AdminLTE\Menu\Filters;
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

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
namespace Themes\AdminLTE\Menu\Filters;
=======
namespace Themes\KlekooAdm\Menu\Filters;
>>>>>>> b738e1c (rebase)
=======
namespace Themes\AdminLTE\Menu\Filters;
>>>>>>> 63c2c43 (up)
=======
namespace Themes\KlekooAdm\Menu\Filters;
>>>>>>> 8a5cc0b (.)
>>>>>>> b6bf7b3 (rebase)

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
