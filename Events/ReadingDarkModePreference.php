<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

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
>>>>>>> 905478d7 (rebase)
namespace Themes\AdminLTE\Events;
=======
namespace Themes\KlekooAdm\Events;
>>>>>>> b738e1c (rebase)

use Themes\KlekooAdm\Http\Controllers\DarkModeController;

<<<<<<< HEAD
class ReadingDarkModePreference {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
class ReadingDarkModePreference {
=======
class ReadingDarkModePreference
{
>>>>>>> 31d6e3b (first)
=======
class ReadingDarkModePreference {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
class ReadingDarkModePreference {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
    /**
     * An instance of the dark mode controller.
     *
     * @var DarkModeController
     */
    public $darkMode;

    /**
     * Create a new event instance.
<<<<<<< HEAD
     */
    public function __construct(DarkModeController $ctrl) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function __construct(DarkModeController $ctrl) {
=======
     *
     * @param  DarkModeController  $ctrl
     */
    public function __construct(DarkModeController $ctrl)
    {
>>>>>>> 31d6e3b (first)
=======
     */
    public function __construct(DarkModeController $ctrl) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
     */
    public function __construct(DarkModeController $ctrl) {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
        $this->darkMode = $ctrl;
    }
}
