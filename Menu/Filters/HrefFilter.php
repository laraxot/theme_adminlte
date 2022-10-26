<?php

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
=======
declare(strict_types=1);

>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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
=======
namespace Themes\AdminLTE\Menu\Filters;
>>>>>>> 5b4054a (.)

use Illuminate\Contracts\Routing\UrlGenerator;
use Themes\AdminLTE\Helpers\MenuItemHelper;

<<<<<<< HEAD
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
=======
class HrefFilter implements FilterInterface {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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
=======
     */
    public function __construct(UrlGenerator $urlGenerator) {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        $this->urlGenerator = $urlGenerator;
    }

    /**
     * Transforms a menu item. Make the href attribute when situable.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
     * @param array $item A menu item
     *
     * @return array The transformed menu item
     */
    public function transform($item) {
<<<<<<< HEAD
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
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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
<<<<<<< HEAD
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
     * @param array $item A menu item
     *
     * @return string The href attribute
     */
    protected function makeHref($item) {
<<<<<<< HEAD
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
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
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
