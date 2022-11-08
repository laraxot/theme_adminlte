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
namespace Themes\AdminLTE\Menu\Filters;
=======
namespace Themes\KlekooAdm\Menu\Filters;
>>>>>>> b738e1c (rebase)
=======
namespace Themes\AdminLTE\Menu\Filters;
>>>>>>> 63c2c43 (up)
=======
namespace Themes\KlekooAdm\Menu\Filters;
>>>>>>> 8a5cc0b (.)

use Illuminate\Translation\Translator;

<<<<<<< HEAD
class LangFilter implements FilterInterface {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
class LangFilter implements FilterInterface {
=======
class LangFilter implements FilterInterface
{
>>>>>>> 31d6e3b (first)
=======
class LangFilter implements FilterInterface {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
class LangFilter implements FilterInterface {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
    /**
     * The translator instance.
     *
     * @var Translator
     */
    protected $translator;

    /**
     * The array of menu item properties to translate.
     *
     * @var array
     */
    protected $itemProperties;

    /**
     * Constructor.
<<<<<<< HEAD
     */
    public function __construct(Translator $translator) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function __construct(Translator $translator) {
=======
     *
     * @param  Translator  $translator
     */
    public function __construct(Translator $translator)
    {
>>>>>>> 31d6e3b (first)
=======
     */
    public function __construct(Translator $translator) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
     */
    public function __construct(Translator $translator) {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
        $this->translator = $translator;
        $this->itemProperties = ['header', 'text', 'label'];
    }

    /**
     * Transforms a menu item. Makes the item translations.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
     * @param array $item A menu item
     *
     * @return array The transformed menu item
     */
    public function transform($item) {
        // Translate the menu item properties.

        foreach ($this->itemProperties as $prop) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 905478d (rebase)
=======
     * @param  array  $item  A menu item
=======
     * @param array $item A menu item
     *
>>>>>>> f405739 (up)
     * @return array The transformed menu item
     */
    public function transform($item) {
        // Translate the menu item properties.

        foreach ($this->itemProperties as $prop) {
<<<<<<< HEAD

>>>>>>> 31d6e3b (first)
=======
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
            // Check if the property exists for the item.

            if (! isset($item[$prop])) {
                continue;
            }

            // Check if the property value is valid for be translated.

            if (\is_array($item[$prop])) {
                $params = $item[$prop][1] ?? [];
                $params = \is_array($params) ? $params : [];
                $item[$prop] = $this->getTranslation($item[$prop][0], $params);
            } elseif (\is_string($item[$prop])) {
                $item[$prop] = $this->getTranslation($item[$prop]);
            }
        }

        return $item;
    }

    /**
     * Gets the translation for a given key.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
     * @param string $key    The key to translate
     * @param array  $params The additional translation params
     *
     * @return string The translation
     */
    protected function getTranslation($key, $params = []) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 905478d (rebase)
=======
     * @param  string  $key  The key to translate
     * @param  array  $params  The additional translation params
     * @return string The translation
     */
    protected function getTranslation($key, $params = [])
    {
>>>>>>> 31d6e3b (first)
=======
     * @param string $key    The key to translate
     * @param array  $params The additional translation params
     *
     * @return string The translation
     */
    protected function getTranslation($key, $params = []) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
        // Check for a translation.

        if ($this->translator->has('menu.'.$key)) {
            return $this->translator->get('menu.'.$key, $params);
        } elseif ($this->translator->has('adminlte::menu.'.$key)) {
            return $this->translator->get('adminlte::menu.'.$key, $params);
        }

        // When no translation available, return the original key.

        return $key;
    }
}
