<?php

declare(strict_types=1);

namespace Themes\AdminLTE\View\Composers;

use Illuminate\View\View;
use Modules\Xot\View\Composers\XotBaseComposer;
use Themes\AdminLTE\Services\AdminLTE;

class ThemeComposer extends XotBaseComposer {
    /**
     * @var AdminLte
     */
    private $adminlte;

    public function __construct(AdminLTE $adminlte) {
        $this->adminlte = $adminlte;
    }

<<<<<<< HEAD
    /**
     * Bind data to the view.
     *
     * @return void
     */
=======
>>>>>>> 31d6e3b (first)
    public function compose(View $view) {
        $view->with('adminlte', $this->adminlte);
        $view->with('_theme', $this->adminlte);
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 31d6e3b (first)
