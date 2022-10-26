<?php

declare(strict_types=1);

namespace Themes\KlekooAdm\View\Composers;

use Illuminate\View\View;
use Modules\Theme\View\Composers\XotBaseComposer;
use Themes\KlekooAdm\Services\AdminLTE;

class ThemeComposer extends XotBaseComposer {
    /**
     * @var AdminLte
     */
    private $adminlte;

    public function __construct(AdminLTE $adminlte) {
        $this->adminlte = $adminlte;
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b135dba (.)
    /**
     * Bind data to the view.
     *
     * @return void
     */
<<<<<<< HEAD
=======
>>>>>>> 31d6e3b (first)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
=======
>>>>>>> b135dba (.)
    public function compose(View $view) {
        $view->with('adminlte', $this->adminlte);
        $view->with('_theme', $this->adminlte);
    }
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
=======
}
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
=======
}
>>>>>>> e6202c2 (.)
=======
}
>>>>>>> b135dba (.)
=======
}
>>>>>>> 7bb12fc (.)
=======
}
>>>>>>> 63c2c43 (up)
=======
}
>>>>>>> 8a5cc0b (.)
