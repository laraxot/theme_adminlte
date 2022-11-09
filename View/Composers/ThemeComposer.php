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
<<<<<<< HEAD

<<<<<<< HEAD
=======
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
<<<<<<< HEAD
>>>>>>> f264dab (rebase)
=======
=======
    
>>>>>>> ae93a9b (up)
<<<<<<< HEAD
>>>>>>> 5ef5d60 (rebase)
=======
=======

>>>>>>> d79d738 (up)
>>>>>>> cf3e396 (rebase)
    /**
     * Bind data to the view.
     *
     * @return void
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> f264dab (rebase)
=======
=======
>>>>>>> d79d738 (up)
>>>>>>> cf3e396 (rebase)
    public function compose(View $view) {
        $view->with('adminlte', $this->adminlte);
        $view->with('_theme', $this->adminlte);
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> cf3e396 (rebase)
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
<<<<<<< HEAD
>>>>>>> e7c0b61 (rebase)
=======
=======
=======
}
>>>>>>> b135dba (.)
<<<<<<< HEAD
>>>>>>> 5fba10f (rebase)
<<<<<<< HEAD
>>>>>>> f264dab (rebase)
=======
=======
=======
}
>>>>>>> 7bb12fc (.)
<<<<<<< HEAD
>>>>>>> 7582ab0 (rebase)
<<<<<<< HEAD
>>>>>>> d6276e3 (rebase)
=======
=======
=======
}
>>>>>>> 63c2c43 (up)
<<<<<<< HEAD
>>>>>>> 08eedf4 (rebase)
<<<<<<< HEAD
>>>>>>> 158b642 (rebase)
=======
=======
=======
}
>>>>>>> 8a5cc0b (.)
<<<<<<< HEAD
>>>>>>> db07ea7 (rebase)
<<<<<<< HEAD
>>>>>>> 3343d3d (rebase)
=======
=======
=======
}
>>>>>>> 5b4054a (.)
>>>>>>> 5a3868d (rebase)
<<<<<<< HEAD
>>>>>>> 2b9484e (rebase)
=======
=======
}
>>>>>>> d79d738 (up)
>>>>>>> cf3e396 (rebase)
