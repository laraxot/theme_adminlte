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
>>>>>>> cf4e5c1 (rebase)
namespace Themes\AdminLTE\Http\ViewComposers;
=======
namespace Themes\KlekooAdm\Http\ViewComposers;
>>>>>>> b738e1c (rebase)
=======
namespace Themes\AdminLTE\Http\ViewComposers;
>>>>>>> 63c2c43 (up)

use Illuminate\View\View;
use Themes\AdminLTE\AdminLte;

class AdminLteComposer {
    /**
     * @var AdminLte
     */
    private $adminlte;

    public function __construct(AdminLte $adminlte) {
        $this->adminlte = $adminlte;
    }

    /**
     * Bind data to the view.
     *
     * @return void
     */
    public function compose(View $view) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
    public function __construct(AdminLte $adminlte)
    {
        $this->adminlte = $adminlte;
    }

    public function compose(View $view)
    {
>>>>>>> 31d6e3b (first)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
    public function __construct(AdminLte $adminlte) {
        $this->adminlte = $adminlte;
    }

    /**
     * Bind data to the view.
     *
     * @return void
     */
    public function compose(View $view) {
<<<<<<< HEAD
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
>>>>>>> f264dab (rebase)
        $view->with('adminlte', $this->adminlte);
    }
}
