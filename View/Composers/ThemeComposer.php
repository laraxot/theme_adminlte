<?php

declare(strict_types=1);

namespace Themes\KlekooAdm\View\Composers;

use Illuminate\View\View;
<<<<<<< HEAD
use Modules\Xot\View\Composers\XotBaseComposer;
use Themes\AdminLTE\Services\AdminLTE;
=======
use Modules\Theme\View\Composers\XotBaseComposer;
use Themes\KlekooAdm\Services\AdminLTE;
>>>>>>> b6bf7b3 (rebase)

class ThemeComposer extends XotBaseComposer {
    /**
     * @var AdminLte
     */
    private $adminlte;

    public function __construct(AdminLTE $adminlte) {
        $this->adminlte = $adminlte;
    }

    /**
     * Bind data to the view.
     *
     * @return void
     */
    public function compose(View $view) {
        $view->with('adminlte', $this->adminlte);
        $view->with('_theme', $this->adminlte);
    }
}
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 7582ab0 (rebase)
=======
=======
}
>>>>>>> 63c2c43 (up)
<<<<<<< HEAD
>>>>>>> 08eedf4 (rebase)
=======
=======
}
>>>>>>> 8a5cc0b (.)
>>>>>>> db07ea7 (rebase)
>>>>>>> b6bf7b3 (rebase)
