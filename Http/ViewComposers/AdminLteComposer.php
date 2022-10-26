<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

>>>>>>> f405739 (up)
namespace Themes\AdminLTE\Http\ViewComposers;

use Illuminate\View\View;
use Themes\AdminLTE\AdminLte;

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
    /**
     * @var AdminLte
     */
    private $adminlte;

<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(AdminLte $adminlte) {
        $this->adminlte = $adminlte;
    }

    /**
     * Bind data to the view.
     *
     * @return void
     */
    public function compose(View $view) {
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
        $view->with('adminlte', $this->adminlte);
    }
}
