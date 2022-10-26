<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

>>>>>>> f405739 (up)
namespace Themes\AdminLTE\Menu\Filters;

use Illuminate\Contracts\Routing\UrlGenerator;
use Themes\AdminLTE\Helpers\MenuItemHelper;

<<<<<<< HEAD
<<<<<<< HEAD
class HrefFilter implements FilterInterface {
=======
class HrefFilter implements FilterInterface
{
>>>>>>> 31d6e3b (first)
=======
class HrefFilter implements FilterInterface {
>>>>>>> f405739 (up)
    /**
     * The url generator instance.
     *
     * @var UrlGenerator
     */
    protected $urlGenerator;

    /**
     * Constructor.
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function __construct(UrlGenerator $urlGenerator) {
=======
     *
     * @param  UrlGenerator  $urlGenerator
     */
    public function __construct(UrlGenerator $urlGenerator)
    {
>>>>>>> 31d6e3b (first)
=======
     */
    public function __construct(UrlGenerator $urlGenerator) {
>>>>>>> f405739 (up)
        $this->urlGenerator = $urlGenerator;
    }

    /**
     * Transforms a menu item. Make the href attribute when situable.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array $item A menu item
     *
     * @return array The transformed menu item
     */
    public function transform($item) {
=======
     * @param  array  $item  A menu item
     * @return array The transformed menu item
     */
    public function transform($item)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param array $item A menu item
     *
     * @return array The transformed menu item
     */
    public function transform($item) {
>>>>>>> f405739 (up)
        if (! MenuItemHelper::isHeader($item)) {
            $item['href'] = $this->makeHref($item);
        }

        return $item;
    }

    /**
     * Make the href attribute for a menu item.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array $item A menu item
     *
     * @return string The href attribute
     */
    protected function makeHref($item) {
=======
     * @param  array  $item  A menu item
     * @return string The href attribute
     */
    protected function makeHref($item)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param array $item A menu item
     *
     * @return string The href attribute
     */
    protected function makeHref($item) {
>>>>>>> f405739 (up)
        // If url attribute is available, use it to make the href.

        if (isset($item['url'])) {
            return $this->urlGenerator->to($item['url']);
        }

        // When url is not available, check for route attribute.

        if (isset($item['route'])) {
            if (is_array($item['route'])) {
                $route = $item['route'][0];
                $params = is_array($item['route'][1]) ? $item['route'][1] : [];

                return $this->urlGenerator->route($route, $params);
            }

            return $this->urlGenerator->route($item['route']);
        }

        // When no url or route, return a default value.

        return '#';
    }
}
