<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

>>>>>>> f405739 (up)
=======
declare(strict_types=1);

>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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

use Illuminate\Support\Arr;
use Illuminate\View\Component;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
class Options extends Component {
=======
class Options extends Component
{
>>>>>>> 31d6e3b (first)
=======
class Options extends Component {
>>>>>>> f405739 (up)
=======
class Options extends Component {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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
     */
    public function __construct(
<<<<<<< HEAD
<<<<<<< HEAD
        $options,
        $selected = null,
        $disabled = null,
        $strict = null,
        $emptyOption = null,
        $placeholder = null
=======
        $options, $selected = null, $disabled = null,
        $strict = null, $emptyOption = null, $placeholder = null
>>>>>>> 31d6e3b (first)
=======
        $options, $selected = null, $disabled = null,
        $strict = null, $emptyOption = null, $placeholder = null
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
     * @param string $key the option's key
     *
     * @return bool
     */
    public function isSelected($key) {
<<<<<<< HEAD
=======
     * @param  string  $key  The option's key.
     * @return bool
     */
    public function isSelected($key)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param string $key the option's key
     *
     * @return bool
     */
    public function isSelected($key) {
>>>>>>> f405739 (up)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        return in_array($key, $this->selected, $this->strict);
    }

    /**
     * Determines if an option's key is on disabled state.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
     * @param string $key the option's key
     *
     * @return bool
     */
    public function isDisabled($key) {
<<<<<<< HEAD
=======
     * @param  string  $key  The option's key.
     * @return bool
     */
    public function isDisabled($key)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param string $key the option's key
     *
     * @return bool
     */
    public function isDisabled($key) {
>>>>>>> f405739 (up)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        return in_array($key, $this->disabled, $this->strict);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function render() {
=======
    public function render()
    {
>>>>>>> 31d6e3b (first)
=======
    public function render() {
>>>>>>> f405739 (up)
=======
    public function render() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        return view('adminlte::components.form.options');
    }
}
