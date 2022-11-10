<?php

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
declare(strict_types=1);

namespace Themes\KlekooAdm\Menu\Filters;

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
        if (isset($item['data']) && \is_array($item['data'])) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
        if (isset($item['data']) && \is_array($item['data'])) {
=======
=======
>>>>>>> 905478d (rebase)
=======
<<<<<<< HEAD
=======
        if (isset($item['data']) && \is_array($item['data'])) {
=======
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
=======
>>>>>>> d79d738 (up)
=======
>>>>>>> 59a8928 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 64fad46 (rebase)
        if (isset($item['data']) && is_array($item['data'])) {
>>>>>>> f617437 (rebase)
>>>>>>> a05b3ba1 (rebase)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
<<<<<<< HEAD
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
     * @param array $dataArray Array of html data attributes
     *
     * @return string The compiled version of data attributes
     */
    protected function compileData($dataArray) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
=======
=======
>>>>>>> 905478d (rebase)
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
>>>>>>> d79d738 (up)
<<<<<<< HEAD
>>>>>>> a05b3ba1 (rebase)
=======
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
<<<<<<< HEAD
>>>>>>> 655502de (rebase)
=======
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> a159d289 (rebase)
        $compiled = [];

        foreach ($dataArray as $key => $value) {
            $compiled[] = 'data-'.$key.'="'.$value.'"';
        }

        return implode(' ', $compiled);
    }
}
