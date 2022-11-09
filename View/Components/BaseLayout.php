<?php

declare(strict_types=1);

namespace Themes\AdminLTE\View\Components;

use Illuminate\View\Component;

class BaseLayout extends Component {
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct() {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function render(): \Illuminate\Contracts\Support\Renderable {
        /**
         * @phpstan-var view-string
         */
        $view = 'layouts.base';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d79d738c (up)
    public function render(): \Illuminate\Contracts\Support\Renderable {
        return view('layouts.base');
>>>>>>> f617437 (rebase)
    }
}
