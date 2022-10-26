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
    public function render(): \Illuminate\Contracts\Support\Renderable {
=======
    public function render():\Illuminate\Contracts\Support\Renderable {
>>>>>>> 31d6e3b (first)
        return view('layouts.base');
    }
}
