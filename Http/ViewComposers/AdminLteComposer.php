<?php

declare(strict_types=1);

namespace Themes\AdminLTE\Http\ViewComposers;

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
        $view->with('adminlte', $this->adminlte);
    }
}
