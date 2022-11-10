<?php

declare(strict_types=1);

namespace Themes\AdminLTE\View\Components;

use Illuminate\View\Component;

class GuestLayout extends Component {
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): \Illuminate\Contracts\Support\Renderable {
        /**
         * @phpstan-var view-string
         */
        $view = 'layouts.guest';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }
}
