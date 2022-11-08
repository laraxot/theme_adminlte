<?php

<<<<<<< HEAD
declare(strict_types=1);

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
=======
namespace Themes\AdminLTE\Components\Form;
>>>>>>> 5b4054a (.)

use Illuminate\View\Component;

<<<<<<< HEAD
class InputGroupComponent extends Component {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
class InputGroupComponent extends Component {
=======
class InputGroupComponent extends Component
{
>>>>>>> 31d6e3b (first)
=======
class InputGroupComponent extends Component {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
class InputGroupComponent extends Component {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
    /**
     * The id attribute for the underlying input group item. The input group
     * item may be an "input", a "select", a "textarea", etc.
     *
     * @var string
     */
    public $id;

    /**
     * The name attribute for the underlying input group item. This value will
     * be used as the default id attribute when not provided. The input group
     * item may be an "input", a "select", a "textarea", etc.
     *
     * @var string
     */
    public $name;

    /**
     * The label of the input group.
     *
     * @var string
     */
    public $label;

    /**
     * The input group size (you can specify 'sm' or 'lg').
     *
     * @var string
     */
    public $size;

    /**
     * Additional classes for "input-group" element. This provides a way to
     * customize the input group container style.
     *
     * @var string
     */
    public $igroupClass;

    /**
     * Extra classes for the label container. This provides a way to customize
     * the label style.
     *
     * @var string
     */
    public $labelClass;

    /**
     * Extra classes for the "form-group" element. This provides a way to
     * customize the main container style.
     *
     * @var string
     */
    public $fgroupClass;

    /**
     * Indicates if the invalid feedback is disabled for the input group.
     *
     * @var bool
     */
    public $disableFeedback;

    /**
     * The lookup key to use when searching for validation errors. The lookup
     * key is automatically generated from the name property. This provides a
     * way to overwrite that value.
     *
     * @var string
     */
    public $errorKey;

    /**
     * Create a new component instance.
     *
     * @param mixed      $name
     * @param mixed|null $id
     * @param mixed|null $label
     * @param mixed|null $igroupSize
     * @param mixed|null $labelClass
     * @param mixed|null $fgroupClass
     * @param mixed|null $igroupClass
     * @param mixed|null $disableFeedback
     * @param mixed|null $errorKey
     *
     * @return void
     */
    public function __construct(
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 905478d (rebase)
        $name,
        $id = null,
        $label = null,
        $igroupSize = null,
        $labelClass = null,
        $fgroupClass = null,
        $igroupClass = null,
        $disableFeedback = null,
<<<<<<< HEAD
=======
=======
        $name, $id = null, $label = null, $igroupSize = null, $labelClass = null,
        $fgroupClass = null, $igroupClass = null, $disableFeedback = null,
>>>>>>> 31d6e3b (first)
=======
        $name, $id = null, $label = null, $igroupSize = null, $labelClass = null,
        $fgroupClass = null, $igroupClass = null, $disableFeedback = null,
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
        $errorKey = null
    ) {
        $this->id = $id ?? $name;
        $this->name = $name;
        $this->label = $label;
        $this->size = $igroupSize;
        $this->fgroupClass = $fgroupClass;
        $this->labelClass = $labelClass;
        $this->igroupClass = $igroupClass;
        $this->disableFeedback = $disableFeedback;

        // Setup the lookup key for validation errors.

        $this->errorKey = $errorKey ?? $this->makeErrorKey();
    }

    /**
     * Make the class attribute for the "form-group" element.
     *
     * @return string
     */
<<<<<<< HEAD
    public function makeFormGroupClass() {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function makeFormGroupClass() {
=======
    public function makeFormGroupClass()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeFormGroupClass() {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
    public function makeFormGroupClass() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
        $classes = ['form-group'];

        if (isset($this->fgroupClass)) {
            $classes[] = $this->fgroupClass;
        }

        return implode(' ', $classes);
    }

    /**
     * Make the class attribute for the "input-group" element.
     *
     * @return string
     */
<<<<<<< HEAD
    public function makeInputGroupClass() {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function makeInputGroupClass() {
=======
    public function makeInputGroupClass()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeInputGroupClass() {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
    public function makeInputGroupClass() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
        $classes = ['input-group'];

        if (isset($this->size) && \in_array($this->size, ['sm', 'lg'], true)) {
            $classes[] = "input-group-{$this->size}";
        }

        if ($this->isInvalid() && ! isset($this->disableFeedback)) {
            $classes[] = 'adminlte-invalid-igroup';
        }

        if (isset($this->igroupClass)) {
            $classes[] = $this->igroupClass;
        }

        return implode(' ', $classes);
    }

    /**
     * Make the class attribute for the input group item.
     *
     * @return string
     */
<<<<<<< HEAD
    public function makeItemClass() {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function makeItemClass() {
=======
    public function makeItemClass()
    {
>>>>>>> 31d6e3b (first)
=======
    public function makeItemClass() {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
    public function makeItemClass() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
        $classes = ['form-control'];

        if ($this->isInvalid() && ! isset($this->disableFeedback)) {
            $classes[] = 'is-invalid';
        }

        return implode(' ', $classes);
    }

    /**
     * Check if there exists validation errors on the session related to the
     * configured error key.
     *
     * @return bool
     */
<<<<<<< HEAD
    public function isInvalid() {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function isInvalid() {
=======
    public function isInvalid()
    {
>>>>>>> 31d6e3b (first)
=======
    public function isInvalid() {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
    public function isInvalid() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
        // Get the errors bag from session. The errors bag will be an instance
        // of the Illuminate\Support\MessageBag class.

        $errors = session()->get('errors');

        // Check if exists any error related to the configured error key.

        return ! empty($errors) && ! empty($errors->first($this->errorKey));
    }

    /**
     * Make the error key that will be used to search for validation errors.
     * The error key is generated from the 'name' property.
     * Examples:
     * $name = 'files[]'         => $errorKey = 'files'.
     * $name = 'person[2][name]' => $errorKey = 'person.2.name'.
     *
     * @return string
     */
<<<<<<< HEAD
    protected function makeErrorKey() {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected function makeErrorKey() {
=======
    protected function makeErrorKey()
    {
>>>>>>> 31d6e3b (first)
=======
    protected function makeErrorKey() {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
    protected function makeErrorKey() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
        $errKey = preg_replace('@\[\]$@', '', $this->name);

        return preg_replace('@\[([^]]+)\]@', '.$1', $errKey);
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
        $view = 'adminlte::components.form.input-group-component';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
=======
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
        return view('adminlte::components.form.input-group-component');
>>>>>>> f617437 (rebase)
    }
}
