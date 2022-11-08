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
namespace Themes\AdminLTE\Menu;
=======
namespace Themes\KlekooAdm\Menu;
>>>>>>> b738e1c (rebase)
=======
namespace Themes\AdminLTE\Menu;
>>>>>>> 63c2c43 (up)
=======
namespace Themes\KlekooAdm\Menu;
>>>>>>> 8a5cc0b (.)
=======
namespace Themes\AdminLTE\Menu;
>>>>>>> 5b4054a (.)

use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

<<<<<<< HEAD
class ActiveChecker {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
class ActiveChecker {
=======
class ActiveChecker
{
>>>>>>> 31d6e3b (first)
=======
class ActiveChecker {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
class ActiveChecker {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
     */
    public function __construct(UrlGenerator $url) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
     */
    public function __construct(UrlGenerator $url) {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'active' => [$this, 'isExplicitActive'],
            'href' => [$this, 'checkPattern'],
            'url' => [$this, 'checkPattern'],
=======
            'active'  => [$this, 'isExplicitActive'],
            'href'    => [$this, 'checkPattern'],
            'url'     => [$this, 'checkPattern'],
>>>>>>> 31d6e3b (first)
=======
            'active' => [$this, 'isExplicitActive'],
            'href' => [$this, 'checkPattern'],
            'url' => [$this, 'checkPattern'],
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
            'active' => [$this, 'isExplicitActive'],
            'href' => [$this, 'checkPattern'],
            'url' => [$this, 'checkPattern'],
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
        ];
    }

    /**
     * Checks if a menu item is currently active. Active items will be
     * highlighted.
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
     * @param mixed $item The menu item to check
     *
     * @return bool
     */
    public function isActive($item) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 905478d (rebase)
=======
     * @param  mixed  $item  The menu item to check
     * @return bool
     */
    public function isActive($item)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param mixed $item The menu item to check
     *
     * @return bool
     */
    public function isActive($item) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
     * @param array $items The items to check
     *
     * @return bool
     */
    protected function containsActive($items) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 905478d (rebase)
=======
     * @param  array  $items  The items to check
     * @return bool
     */
    protected function containsActive($items)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param array $items The items to check
     *
     * @return bool
     */
    protected function containsActive($items) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
     * @param bool|array $activeDef
     *
     * @return bool
     */
    protected function isExplicitActive($activeDef) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 905478d (rebase)
=======
     * @param  bool|array  $activeDef
     * @return bool
     */
    protected function isExplicitActive($activeDef)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param bool|array $activeDef
     *
     * @return bool
     */
    protected function isExplicitActive($activeDef) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
        // If the active definition is a bool, return it.

        if (\is_bool($activeDef)) {
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
     * @param string $pattern
     *
     * @return bool
     */
    protected function checkPattern($pattern) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 905478d (rebase)
=======
     * @param  string  $pattern
     * @return bool
     */
    protected function checkPattern($pattern)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param string $pattern
     *
     * @return bool
     */
    protected function checkPattern($pattern) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
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
