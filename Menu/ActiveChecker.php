<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
namespace Themes\AdminLTE\Menu;

use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

<<<<<<< HEAD
class ActiveChecker {
=======
class ActiveChecker
{
>>>>>>> 31d6e3b (first)
    /**
     * The request instance.
     *
     * @var Request
     */
    private $request;

    /**
     * The url generator instance.
     *
     * @var UrlGenerator
     */
    private $url;

    /**
     * Map between menu item properties and their respective test method.
     *
     * @var array
     */
    private $tests;

    /**
     * Constructor.
<<<<<<< HEAD
     */
    public function __construct(UrlGenerator $url) {
=======
     *
     * @param  UrlGenerator  $url
     */
    public function __construct(UrlGenerator $url)
    {
>>>>>>> 31d6e3b (first)
        $this->request = $url->getRequest();
        $this->url = $url;

        // Fill the map with tests. These tests will check if a menu item is
        // active or not.

        $this->tests = [
            'submenu' => [$this, 'containsActive'],
<<<<<<< HEAD
            'active' => [$this, 'isExplicitActive'],
            'href' => [$this, 'checkPattern'],
            'url' => [$this, 'checkPattern'],
=======
            'active'  => [$this, 'isExplicitActive'],
            'href'    => [$this, 'checkPattern'],
            'url'     => [$this, 'checkPattern'],
>>>>>>> 31d6e3b (first)
        ];
    }

    /**
     * Checks if a menu item is currently active. Active items will be
     * highlighted.
     *
<<<<<<< HEAD
     * @param mixed $item The menu item to check
     *
     * @return bool
     */
    public function isActive($item) {
=======
     * @param  mixed  $item  The menu item to check
     * @return bool
     */
    public function isActive($item)
    {
>>>>>>> 31d6e3b (first)
        // Return true if any of the verification tests is met.

        foreach ($this->tests as $prop => $testFunc) {
            if (isset($item[$prop]) && $testFunc($item[$prop])) {
                return true;
            }
        }

        // Otherwise, returns false.

        return false;
    }

    /**
     * Checks if an array of items contains an active item.
     *
<<<<<<< HEAD
     * @param array $items The items to check
     *
     * @return bool
     */
    protected function containsActive($items) {
=======
     * @param  array  $items  The items to check
     * @return bool
     */
    protected function containsActive($items)
    {
>>>>>>> 31d6e3b (first)
        foreach ($items as $item) {
            if ($this->isActive($item)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Checks if an item is active by explicit definition of 'active' state.
     *
<<<<<<< HEAD
     * @param bool|array $activeDef
     *
     * @return bool
     */
    protected function isExplicitActive($activeDef) {
=======
     * @param  bool|array  $activeDef
     * @return bool
     */
    protected function isExplicitActive($activeDef)
    {
>>>>>>> 31d6e3b (first)
        // If the active definition is a bool, return it.

        if (is_bool($activeDef)) {
            return $activeDef;
        }

        // Otherwise, check if any of the url patterns that defines the active
        // state matches the requested url.

        foreach ($activeDef as $pattern) {
            if ($this->checkPattern($pattern)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Checks if an url pattern matches the requested url.
     *
<<<<<<< HEAD
     * @param string $pattern
     *
     * @return bool
     */
    protected function checkPattern($pattern) {
=======
     * @param  string  $pattern
     * @return bool
     */
    protected function checkPattern($pattern)
    {
>>>>>>> 31d6e3b (first)
        // First, check if the pattern is a regular expression.

        if (Str::startsWith($pattern, 'regex:')) {
            $regex = Str::substr($pattern, 6);

            return (bool) preg_match($regex, $this->request->path());
        }

        // If pattern is not a regex, check if the requested url matches the
        // absolute path to the given pattern. When the pattern uses query
        // parameters, compare with the full url request.

        $pattern = preg_replace('@^https?://@', '*', $this->url->to($pattern));
        $request = $this->request->url();

        if (isset(parse_url($pattern)['query'])) {
            $request = $this->request->fullUrl();
        }

        return Str::is(trim($pattern), trim($request));
    }
}
