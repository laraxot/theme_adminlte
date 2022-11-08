<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

>>>>>>> f405739 (up)
>>>>>>> f617437 (rebase)
namespace Themes\AdminLTE\Components\Form;

use Illuminate\Support\Arr;
use Illuminate\View\Component;

<<<<<<< HEAD
class Options extends Component {
=======
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
>>>>>>> f617437 (rebase)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
     * @param string $key the option's key
     *
     * @return bool
     */
    public function isSelected($key) {
<<<<<<< HEAD
        return \in_array($key, $this->selected, $this->strict);
=======
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
        return in_array($key, $this->selected, $this->strict);
>>>>>>> f617437 (rebase)
    }

    /**
     * Determines if an option's key is on disabled state.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
     * @param string $key the option's key
     *
     * @return bool
     */
    public function isDisabled($key) {
<<<<<<< HEAD
        return \in_array($key, $this->disabled, $this->strict);
=======
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
        return in_array($key, $this->disabled, $this->strict);
>>>>>>> f617437 (rebase)
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
<<<<<<< HEAD
    public function render() {
        /**
         * @phpstan-var view-string
         */
        $view = 'adminlte::components.form.options';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
=======
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
        return view('adminlte::components.form.options');
>>>>>>> f617437 (rebase)
    }
}
