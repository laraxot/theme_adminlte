<?php

<<<<<<< HEAD
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
=======
namespace Themes\AdminLTE\Menu\Filters;

class DataFilter implements FilterInterface
{
    /**
     * Transforms a menu item. Adds the compiled data attributes when suitable.
     *
     * @param  array  $item  A menu item
     * @return array The transformed menu item
     */
    public function transform($item)
    {
>>>>>>> 31d6e3b (first)
        if (isset($item['data']) && is_array($item['data'])) {
            $item['data-compiled'] = $this->compileData($item['data']);
        }

        return $item;
    }

    /**
     * Compile an array of data attributes into a data string.
     *
<<<<<<< HEAD
     * @param array $dataArray Array of html data attributes
     *
     * @return string The compiled version of data attributes
     */
    protected function compileData($dataArray) {
=======
     * @param  array  $dataArray  Array of html data attributes
     * @return string The compiled version of data attributes
     */
    protected function compileData($dataArray)
    {
>>>>>>> 31d6e3b (first)
        $compiled = [];

        foreach ($dataArray as $key => $value) {
            $compiled[] = 'data-'.$key.'="'.$value.'"';
        }

        return implode(' ', $compiled);
    }
}
