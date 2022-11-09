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
namespace Themes\AdminLTE\Http\ViewComposers;

use Illuminate\View\View;
use Themes\AdminLTE\AdminLte;

<<<<<<< HEAD
class AdminLteComposer {
=======
<<<<<<< HEAD
<<<<<<< HEAD
class AdminLteComposer {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
class AdminLteComposer {
=======
class AdminLteComposer
{
>>>>>>> 31d6e3b (first)
=======
class AdminLteComposer {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
class AdminLteComposer {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
=======
class AdminLteComposer {
>>>>>>> d79d738 (up)
>>>>>>> cf3e396 (rebase)
    /**
     * @var AdminLte
     */
    private $adminlte;

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
>>>>>>> 905478d (rebase)
=======
>>>>>>> d79d738 (up)
>>>>>>> cf3e396 (rebase)
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
<<<<<<< HEAD
>>>>>>> f264dab (rebase)
=======
=======
>>>>>>> d79d738 (up)
>>>>>>> cf3e396 (rebase)
        $view->with('adminlte', $this->adminlte);
    }
}
