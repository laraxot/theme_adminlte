<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Themes\AdminLTE\Menu\Filters;
=======
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
>>>>>>> b6bf7b3 (rebase)

use Illuminate\Translation\Translator;

class LangFilter implements FilterInterface {
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
     */
    public function __construct(Translator $translator) {
        $this->translator = $translator;
        $this->itemProperties = ['header', 'text', 'label'];
    }

    /**
     * Transforms a menu item. Makes the item translations.
     *
     * @param array $item A menu item
     *
     * @return array The transformed menu item
     */
    public function transform($item) {
        // Translate the menu item properties.

        foreach ($this->itemProperties as $prop) {
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
     * @param string $key    The key to translate
     * @param array  $params The additional translation params
     *
     * @return string The translation
     */
    protected function getTranslation($key, $params = []) {
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
