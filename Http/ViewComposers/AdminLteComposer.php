<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
namespace Themes\AdminLTE\Http\ViewComposers;

use Illuminate\View\View;
use Themes\AdminLTE\AdminLte;

<<<<<<< HEAD
class AdminLteComposer {
=======
class AdminLteComposer
{
>>>>>>> 31d6e3b (first)
    /**
     * @var AdminLte
     */
    private $adminlte;

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
        $view->with('adminlte', $this->adminlte);
    }
}
