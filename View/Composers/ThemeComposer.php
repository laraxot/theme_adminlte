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
<<<<<<< HEAD
>>>>>>> b8343442 (rebase)
=======
=======

>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> 905478d (rebase)
>>>>>>> 64fad46 (rebase)
<<<<<<< HEAD
>>>>>>> a159d289 (rebase)
=======
=======
>>>>>>> baf54ed (rebase)
>>>>>>> 1a682fce (rebase)
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
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
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
<<<<<<< HEAD
>>>>>>> a159d289 (rebase)
=======
=======
=======
=======
>>>>>>> b135dba (.)
>>>>>>> 5fba10f (rebase)
>>>>>>> baf54ed (rebase)
>>>>>>> 1a682fce (rebase)
    public function compose(View $view) {
        $view->with('adminlte', $this->adminlte);
        $view->with('_theme', $this->adminlte);
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> 59a8928 (rebase)
>>>>>>> 655502de (rebase)
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
<<<<<<< HEAD
>>>>>>> 802aff9c (rebase)
=======
=======
=======
}
>>>>>>> 63c2c43 (up)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 08eedf4 (rebase)
<<<<<<< HEAD
>>>>>>> 6f3ed7c3 (rebase)
=======
=======
=======
}
>>>>>>> 8a5cc0b (.)
<<<<<<< HEAD
>>>>>>> db07ea7 (rebase)
<<<<<<< HEAD
>>>>>>> bc832b90 (rebase)
=======
=======
=======
}
>>>>>>> 5b4054a (.)
>>>>>>> 5a3868d (rebase)
<<<<<<< HEAD
>>>>>>> 103222ea (rebase)
=======
=======
}
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
>>>>>>> 905478d (rebase)
>>>>>>> 64fad46 (rebase)
<<<<<<< HEAD
>>>>>>> a159d289 (rebase)
=======
=======
>>>>>>> 2388cd9 (rebase)
>>>>>>> 4861446 (rebase)
<<<<<<< HEAD
>>>>>>> f284891f (rebase)
=======
=======
>>>>>>> 5fba10f (rebase)
>>>>>>> baf54ed (rebase)
<<<<<<< HEAD
>>>>>>> 1a682fce (rebase)
=======
=======
>>>>>>> 7582ab0 (rebase)
>>>>>>> d20c4d6 (rebase)
<<<<<<< HEAD
>>>>>>> 06f3c31a (rebase)
=======
=======
>>>>>>> 08eedf4 (rebase)
>>>>>>> f63434d (rebase)
>>>>>>> 9a582057 (rebase)
