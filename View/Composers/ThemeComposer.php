<?php

declare(strict_types=1);

namespace Themes\AdminLTE\View\Composers;

use Illuminate\View\View;
use Modules\Theme\View\Composers\XotBaseComposer;
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 905478d (rebase)
=======
=======
>>>>>>> b135dba (.)
>>>>>>> 5fba10f (rebase)
    /**
     * Bind data to the view.
     *
     * @return void
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5fba10f (rebase)
=======
>>>>>>> 31d6e3b (first)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
<<<<<<< HEAD
>>>>>>> 905478d (rebase)
=======
=======
>>>>>>> b135dba (.)
>>>>>>> 5fba10f (rebase)
    public function compose(View $view) {
        $view->with('adminlte', $this->adminlte);
        $view->with('_theme', $this->adminlte);
    }
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
}
>>>>>>> 31d6e3b (first)
=======
}
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
}
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
<<<<<<< HEAD
>>>>>>> 905478d (rebase)
=======
=======
}
>>>>>>> e6202c2 (.)
<<<<<<< HEAD
>>>>>>> 2388cd9 (rebase)
=======
=======
}
>>>>>>> b135dba (.)
<<<<<<< HEAD
>>>>>>> 5fba10f (rebase)
=======
=======
}
>>>>>>> 7bb12fc (.)
>>>>>>> 7582ab0 (rebase)
