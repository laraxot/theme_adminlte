<?php

declare(strict_types=1);

namespace Themes\AdminLTE\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component {
    /**
     * Get the view / contents that represents the component.
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
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
=======
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
>>>>>>> f617437 (rebase)
