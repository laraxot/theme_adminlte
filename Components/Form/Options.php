<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Themes\AdminLTE\Components\Form;
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
declare(strict_types=1);

>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
namespace Themes\AdminLTE\Components\Form;
=======
namespace Themes\KlekooAdm\Components\Form;
>>>>>>> b738e1c (rebase)
=======
namespace Themes\AdminLTE\Components\Form;
>>>>>>> 63c2c43 (up)
=======
namespace Themes\KlekooAdm\Components\Form;
>>>>>>> 8a5cc0b (.)
<<<<<<< HEAD
>>>>>>> b6bf7b3 (rebase)
=======
=======
namespace Themes\AdminLTE\Components\Form;
>>>>>>> 5b4054a (.)
>>>>>>> 4ab624f (rebase)

use Illuminate\Support\Arr;
use Illuminate\View\Component;

class Options extends Component {
    /**
     * The list of options as key value pairs.
     *
     * @var array
     */
    public $options;

    /**
     * The list of selected option keys.
     *
     * @var array
     */
    public $selected;

    /**
     * The list of disabled option keys.
     *
     * @var array
     */
    public $disabled;

    /**
     * Whether to use strict comparison between the option keys and the keys of
     * the selected/disabled options.
     *
     * @var bool
     */
    public $strict;

    /**
     * Whether to add a selectable empty option to the list of options. If the
     * value is a string, it will be used as the option label, otherwise no
     * label will be available for the empty option.
     *
     * @var bool|string
     */
    public $emptyOption;

    /**
     * Whether to add a placeholder (non-selectable option) to the list of
     * options. If the value is a string, it will be used as the placeholder
     * label, otherwise no label will be available for the placeholder.
     *
     * @var bool|string
     */
    public $placeholder;

    /**
     * Create a new component instance.
     *
     * @param mixed      $options
     * @param mixed|null $selected
     * @param mixed|null $disabled
     * @param mixed|null $strict
     * @param mixed|null $emptyOption
     * @param mixed|null $placeholder
     */
    public function __construct(
        $options,
        $selected = null,
        $disabled = null,
        $strict = null,
        $emptyOption = null,
        $placeholder = null
    ) {
        $this->options = Arr::wrap($options);
        $this->selected = Arr::wrap($selected);
        $this->disabled = Arr::wrap($disabled);
        $this->strict = isset($strict);
        $this->emptyOption = $emptyOption;
        $this->placeholder = $placeholder;
    }

    /**
     * Determines if an option's key is on selected state.
     *
     * @param string $key the option's key
     *
     * @return bool
     */
    public function isSelected($key) {
        return \in_array($key, $this->selected, $this->strict);
    }

    /**
     * Determines if an option's key is on disabled state.
     *
     * @param string $key the option's key
     *
     * @return bool
     */
    public function isDisabled($key) {
        return \in_array($key, $this->disabled, $this->strict);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render() {
        /**
         * @phpstan-var view-string
         */
        $view = 'adminlte::components.form.options';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }
}
