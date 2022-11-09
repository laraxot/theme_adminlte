<?php

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
declare(strict_types=1);

namespace Themes\AdminLTE\Menu\Filters;

class DataFilter implements FilterInterface {
    /**
     * Transforms a menu item. Adds the compiled data attributes when suitable.
     *
     * @param array $item A menu item
     *
     * @return array The transformed menu item
     */
    public function transform($item) {
<<<<<<< HEAD
<<<<<<< HEAD
        if (isset($item['data']) && \is_array($item['data'])) {
=======
=======
>>>>>>> 905478d7 (rebase)
=======
=======
declare(strict_types=1);

>>>>>>> f405739 (up)
namespace Themes\AdminLTE\Menu\Filters;

class DataFilter implements FilterInterface {
    /**
     * Transforms a menu item. Adds the compiled data attributes when suitable.
     *
     * @param array $item A menu item
     *
     * @return array The transformed menu item
     */
<<<<<<< HEAD
    public function transform($item)
    {
>>>>>>> 31d6e3b (first)
=======
    public function transform($item) {
>>>>>>> f405739 (up)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        if (isset($item['data']) && is_array($item['data'])) {
>>>>>>> f617437 (rebase)
            $item['data-compiled'] = $this->compileData($item['data']);
        }

        return $item;
    }

    /**
     * Compile an array of data attributes into a data string.
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
>>>>>>> 905478d7 (rebase)
     * @param array $dataArray Array of html data attributes
     *
     * @return string The compiled version of data attributes
     */
    protected function compileData($dataArray) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 905478d7 (rebase)
=======
     * @param  array  $dataArray  Array of html data attributes
     * @return string The compiled version of data attributes
     */
    protected function compileData($dataArray)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param array $dataArray Array of html data attributes
     *
     * @return string The compiled version of data attributes
     */
    protected function compileData($dataArray) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
        $compiled = [];

        foreach ($dataArray as $key => $value) {
            $compiled[] = 'data-'.$key.'="'.$value.'"';
        }

        return implode(' ', $compiled);
    }
}
