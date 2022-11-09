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
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
    public function render(): \Illuminate\Contracts\Support\Renderable {
=======
=======
>>>>>>> 64fad46 (rebase)
    public function render(): \Illuminate\Contracts\Support\Renderable {
=======
    public function render():\Illuminate\Contracts\Support\Renderable {
>>>>>>> 31d6e3b (first)
=======
    public function render(): \Illuminate\Contracts\Support\Renderable {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> 59a8928 (rebase)
=======
=======
    public function render(): \Illuminate\Contracts\Support\Renderable {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 64fad46 (rebase)
        return view('layouts.base');
>>>>>>> f617437 (rebase)
    }
}
