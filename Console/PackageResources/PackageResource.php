<?php

<<<<<<< HEAD
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
=======
>>>>>>> dfca2a99 (rebase)
declare(strict_types=1);

namespace Themes\KlekooAdm\Console\PackageResources;

abstract class PackageResource {
<<<<<<< HEAD
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
namespace Themes\AdminLTE\Console\PackageResources;

abstract class PackageResource
{
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

namespace Themes\AdminLTE\Console\PackageResources;

abstract class PackageResource {
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
=======
>>>>>>> dfca2a99 (rebase)
    /**
     * The package resource description. A litle summary of what this
     * resource contains.
     *
     * @var string
     */
    public $description;

    /**
     * The resource source. Usually the source will be a set of paths to files
     * and/or folders.
     *
     * @var mixed
     */
    protected $source;

    /**
     * The resource target. The destination of the resource, usually a root
     * folder or file.
     *
     * @var mixed
     */
    public $target;

    /**
     * Whether this resource is required for the package in order to work fine.
     *
     * @var bool
     */
    public $required;

    /**
     * The set of installation messages for this resource. Usually, the array
     * should contains keys for 'install', 'overwrite' and 'success' messages.
     *
     * @var array
     */
    protected $messages;

    /**
     * Install or export the resource.
     *
     * @return void
     */
    abstract public function install();

    /**
     * Uninstall or remove the resource.
     *
     * @return void
     */
    abstract public function uninstall();

    /**
     * Check if the resource already exists on the target destination.
     *
     * @return bool
     */
    abstract public function exists();

    /**
     * Check if the resource is correctly installed.
     *
     * @return bool
     */
    abstract public function installed();

    /**
     * Get an installation message.
     *
<<<<<<< HEAD
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
=======
>>>>>>> dfca2a99 (rebase)
     * @param string $key The message keyword
     *
     * @return string
     */
    public function getInstallMessage($key) {
<<<<<<< HEAD
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
     * @param  string  $key  The message keyword
     * @return string
     */
    public function getInstallMessage($key)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param string $key The message keyword
     *
     * @return string
     */
    public function getInstallMessage($key) {
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
=======
>>>>>>> dfca2a99 (rebase)
        if (! isset($this->messages[$key])) {
            return '';
        }

        return $this->messages[$key];
    }
}
