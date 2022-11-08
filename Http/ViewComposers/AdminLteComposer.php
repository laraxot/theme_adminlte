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
class AdminLteComposer
{
>>>>>>> 31d6e3b (first)
=======
class AdminLteComposer {
>>>>>>> f405739 (up)
>>>>>>> f617437 (rebase)
    /**
     * @var AdminLte
     */
    private $adminlte;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
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
=======
    public function __construct(AdminLte $adminlte)
    {
        $this->adminlte = $adminlte;
    }

    public function compose(View $view)
    {
>>>>>>> 31d6e3b (first)
=======
    public function __construct(AdminLte $adminlte) {
        $this->adminlte = $adminlte;
    }

    public function compose(View $view) {
>>>>>>> f405739 (up)
>>>>>>> f617437 (rebase)
        $view->with('adminlte', $this->adminlte);
    }
}
