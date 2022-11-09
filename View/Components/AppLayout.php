<?php

declare(strict_types=1);

namespace Themes\KlekooAdm\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component {
    /**
     * Get the view / contents that represents the component.
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
     */
    public function render(): \Illuminate\Contracts\Support\Renderable {
        /**
         * @phpstan-var view-string
         */
        $view = 'layouts.app';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 905478d7 (rebase)
=======
     *
     
=======
>>>>>>> f405739 (up)
     */
    public function render(): \Illuminate\Contracts\Support\Renderable {
        return view('layouts.app');
    }
}
<<<<<<< HEAD
>>>>>>> 31d6e3b (first)
=======
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
