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
<<<<<<< HEAD

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> baf54ed (rebase)
>>>>>>> 905478d (rebase)
=======
=======
>>>>>>> b135dba (.)
>>>>>>> 5fba10f (rebase)
<<<<<<< HEAD
=======
    
>>>>>>> ae93a9b (up)
=======

>>>>>>> d79d738 (up)
=======
>>>>>>> 905478d (rebase)
>>>>>>> 64fad46 (rebase)
=======
>>>>>>> baf54ed (rebase)
    /**
     * Bind data to the view.
     *
     * @return void
     */
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> d79d738 (up)
=======
=======
>>>>>>> baf54ed (rebase)
=======
=======
>>>>>>> 5fba10f (rebase)
=======
>>>>>>> 31d6e3b (first)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
<<<<<<< HEAD
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
>>>>>>> 64fad46 (rebase)
=======
=======
=======
>>>>>>> b135dba (.)
>>>>>>> 5fba10f (rebase)
>>>>>>> baf54ed (rebase)
    public function compose(View $view) {
        $view->with('adminlte', $this->adminlte);
        $view->with('_theme', $this->adminlte);
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
}
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
=======
>>>>>>> 4861446 (rebase)
=======
>>>>>>> baf54ed (rebase)
=======
>>>>>>> d20c4d6 (rebase)
=======
>>>>>>> f63434d (rebase)
}
=======
}
>>>>>>> 31d6e3b (first)
=======
}
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
}
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4861446 (rebase)
>>>>>>> 905478d (rebase)
=======
=======
}
>>>>>>> e6202c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> baf54ed (rebase)
>>>>>>> 2388cd9 (rebase)
=======
=======
}
>>>>>>> b135dba (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d20c4d6 (rebase)
>>>>>>> 5fba10f (rebase)
=======
=======
}
>>>>>>> 7bb12fc (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f63434d (rebase)
>>>>>>> 7582ab0 (rebase)
=======
=======
}
>>>>>>> 63c2c43 (up)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 08eedf4 (rebase)
=======
=======
}
>>>>>>> 8a5cc0b (.)
<<<<<<< HEAD
>>>>>>> db07ea7 (rebase)
=======
=======
}
>>>>>>> 5b4054a (.)
>>>>>>> 5a3868d (rebase)
=======
}
>>>>>>> d79d738 (up)
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 905478d (rebase)
>>>>>>> 64fad46 (rebase)
=======
>>>>>>> 2388cd9 (rebase)
>>>>>>> 4861446 (rebase)
=======
>>>>>>> 5fba10f (rebase)
>>>>>>> baf54ed (rebase)
=======
>>>>>>> 7582ab0 (rebase)
>>>>>>> d20c4d6 (rebase)
=======
>>>>>>> 08eedf4 (rebase)
>>>>>>> f63434d (rebase)
