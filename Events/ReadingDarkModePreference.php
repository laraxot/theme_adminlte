<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
declare(strict_types=1);

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 4a726e2 (rebase)
=======
>>>>>>> f63434d (rebase)
=======
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
declare(strict_types=1);

>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> d79d738 (up)
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
namespace Themes\AdminLTE\Events;
=======
namespace Themes\KlekooAdm\Events;
>>>>>>> b738e1c (rebase)
=======
namespace Themes\AdminLTE\Events;
>>>>>>> 63c2c43 (up)

use Themes\AdminLTE\Http\Controllers\DarkModeController;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
class ReadingDarkModePreference {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
class ReadingDarkModePreference {
=======
class ReadingDarkModePreference
{
>>>>>>> 31d6e3b (first)
=======
class ReadingDarkModePreference {
>>>>>>> f405739 (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
class ReadingDarkModePreference {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
class ReadingDarkModePreference {
>>>>>>> d79d738 (up)
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
    /**
     * An instance of the dark mode controller.
     *
     * @var DarkModeController
     */
    public $darkMode;

    /**
     * Create a new event instance.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
     */
    public function __construct(DarkModeController $ctrl) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 64fad46 (rebase)
>>>>>>> f617437 (rebase)
=======
=======
     */
    public function __construct(DarkModeController $ctrl) {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)
<<<<<<< HEAD
=======
     */
    public function __construct(DarkModeController $ctrl) {
>>>>>>> d79d738 (up)
=======
>>>>>>> f617437 (rebase)
>>>>>>> 59a8928 (rebase)
=======
>>>>>>> 64fad46 (rebase)
        $this->darkMode = $ctrl;
    }
}
