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
namespace Themes\AdminLTE\Http\Controllers;
=======
namespace Themes\KlekooAdm\Http\Controllers;
>>>>>>> b738e1c (rebase)
=======
namespace Themes\AdminLTE\Http\Controllers;
>>>>>>> 63c2c43 (up)
=======
namespace Themes\KlekooAdm\Http\Controllers;
>>>>>>> 8a5cc0b (.)
=======
namespace Themes\AdminLTE\Http\Controllers;
>>>>>>> 5b4054a (.)

use Themes\AdminLTE\Events\DarkModeWasToggled;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
class DarkModeController extends Controller {
=======
class DarkModeController extends Controller
{
>>>>>>> 31d6e3b (first)
=======
class DarkModeController extends Controller {
>>>>>>> f405739 (up)
=======
class DarkModeController extends Controller {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
    /**
     * The key to use for save dark mode preference on the session.
     *
     * @var string
     */
    protected $sessionKey = 'adminlte_dark_mode';

    /**
     * Toggle the dark mode preference.
     *
     * @return void
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function toggle() {
=======
    public function toggle()
    {
>>>>>>> 31d6e3b (first)
=======
    public function toggle() {
>>>>>>> f405739 (up)
=======
    public function toggle() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        // Store the new dark mode preference on the session. This way, we can
        // keep the dark mode preference over multiple requests.

        session([$this->sessionKey => ! $this->isEnabled()]);

        // Dispatch an event to notify this situation. This way, a listener may
        // read the new dark mode preference using the controller, and update
        // that preference on a database or another tool for persist data.

        event(new DarkModeWasToggled($this));
    }

    /**
     * Check if the dark mode is currently enabled or not.
     *
     * @return bool
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function isEnabled() {
=======
    public function isEnabled()
    {
>>>>>>> 31d6e3b (first)
=======
    public function isEnabled() {
>>>>>>> f405739 (up)
=======
    public function isEnabled() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        // First, check if dark mode preference is available on the session.

        if (! is_null(session($this->sessionKey, null))) {
            return session($this->sessionKey);
        }

        // Otherwise, fallback to the default package configuration preference.

        return (bool) config('adminlte.layout_dark_mode', false);
    }

    /**
     * Enables the dark mode.
     *
     * @return void
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function enable() {
=======
    public function enable()
    {
>>>>>>> 31d6e3b (first)
=======
    public function enable() {
>>>>>>> f405739 (up)
=======
    public function enable() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        session([$this->sessionKey => true]);
    }

    /**
     * Disables the dark mode.
     *
     * @return void
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function disable() {
=======
    public function disable()
    {
>>>>>>> 31d6e3b (first)
=======
    public function disable() {
>>>>>>> f405739 (up)
=======
    public function disable() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
        session([$this->sessionKey => false]);
    }
}
