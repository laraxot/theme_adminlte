<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

>>>>>>> f405739 (up)
namespace Themes\AdminLTE\Http\Controllers;

use Themes\AdminLTE\Events\DarkModeWasToggled;

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
    public function toggle() {
=======
    public function toggle()
    {
>>>>>>> 31d6e3b (first)
=======
    public function toggle() {
>>>>>>> f405739 (up)
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
    public function isEnabled() {
=======
    public function isEnabled()
    {
>>>>>>> 31d6e3b (first)
=======
    public function isEnabled() {
>>>>>>> f405739 (up)
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
    public function enable() {
=======
    public function enable()
    {
>>>>>>> 31d6e3b (first)
=======
    public function enable() {
>>>>>>> f405739 (up)
        session([$this->sessionKey => true]);
    }

    /**
     * Disables the dark mode.
     *
     * @return void
     */
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
        session([$this->sessionKey => false]);
    }
}
