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
namespace Themes\AdminLTE\Helpers;
=======
namespace Themes\KlekooAdm\Helpers;
>>>>>>> b738e1c (rebase)

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

<<<<<<< HEAD
class CommandHelper {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
class CommandHelper {
=======
class CommandHelper
{
>>>>>>> 31d6e3b (first)
=======
class CommandHelper {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
class CommandHelper {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
    /**
     * Path to the package root folder.
     *
     * @var string
     */
    protected static $packagePath = __DIR__.'/../../';

    /**
     * Path to the package stubs folder.
     *
     * @var string
     */
    protected static $stubsPath = __DIR__.'/../Console/stubs';

    /**
     * Ensure a directory exists by creating it when needed.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
     * @param string $dir       The path of the directory
     * @param int    $mode      The directory access mode
     * @param bool   $recursive Allow creating nested directories present in path
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return void
     */
    public static function ensureDirectoryExists($dir, $mode = 0755, $recursive = true) {
<<<<<<< HEAD
=======
=======
     * @param  string  $dir  The path of the directory
     * @param  int  $mode  The directory access mode
     * @param  bool  $recursive  Allow creating nested directories present in path
     * @return void
     */
    public static function ensureDirectoryExists($dir, $mode = 0755, $recursive = true)
    {
>>>>>>> 31d6e3b (first)
=======
     * @return void
     */
    public static function ensureDirectoryExists($dir, $mode = 0755, $recursive = true) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
     * @return void
     */
    public static function ensureDirectoryExists($dir, $mode = 0755, $recursive = true) {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
        if (! is_dir($dir)) {
            mkdir($dir, $mode, $recursive);
        }
    }

    /**
     * Copy an entire directory to a destination.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
     * @param string $dir       The path of the source folder
     * @param string $dest      The path of the destination folder
     * @param bool   $force     Whether to force the overwrite of existing files
     * @param bool   $recursive Whether to copy subfolders recursively
     * @param array  $ignores   Array of files to be ignored
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return void
     */
    public static function copyDirectory($dir, $dest, $force = false, $recursive = false, $ignores = []) {
<<<<<<< HEAD
=======
=======
     * @param  string  $dir  The path of the source folder
     * @param  string  $dest  The path of the destination folder
     * @param  bool  $force  Whether to force the overwrite of existing files
     * @param  bool  $recursive  Whether to copy subfolders recursively
     * @param  array  $ignores  Array of files to be ignored
     * @return void
     */
    public static function copyDirectory($dir, $dest, $force = false, $recursive = false, $ignores = [])
    {
>>>>>>> 31d6e3b (first)
=======
     * @return void
     */
    public static function copyDirectory($dir, $dest, $force = false, $recursive = false, $ignores = []) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
     * @return void
     */
    public static function copyDirectory($dir, $dest, $force = false, $recursive = false, $ignores = []) {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
        // Open the source folder. Return if fails to open.

        if (! \is_resource($dirHandler = @opendir($dir))) {
            return;
        }

        // Ensure the destination folder exists.

        self::ensureDirectoryExists($dest);

        // Copy the source files to destination.

        while (($file = readdir($dirHandler)) !== false) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 31d6e3b (first)
=======
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
            // Check if this file should be ignored.

            $filesToIgnore = array_merge($ignores, ['.', '..']);

            if (self::isIgnoredFile($file, $filesToIgnore)) {
                continue;
            }

            // Now, copy the file/folder. If the resource is a folder, proceed
            // recursively. Otherwise, copy the file to destination.

            $source = $dir.\DIRECTORY_SEPARATOR.$file;
            $target = $dest.\DIRECTORY_SEPARATOR.$file;

            if (is_dir($source) && $recursive) {
                self::copyDirectory($source, $target, $force, $recursive, $ignores);
            } elseif (is_file($source) && ($force || ! file_exists($target))) {
                copy($source, $target);
            }
        }

        // Close the source folder.

        closedir($dirHandler);
    }

    /**
     * Compare two directories file by file.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
     * @param string $dir1      The path of the first folder
     * @param string $dir2      The path of the second folder
     * @param bool   $recursive Whether to compare subfolders recursively
     * @param array  $ignores   Array of files to be ignored
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return bool|null Result of comparison or null if a folder not exists
     */
    public static function compareDirectories($dir1, $dir2, $recursive = false, $ignores = []) {
<<<<<<< HEAD
=======
=======
     * @param  string  $dir1  The path of the first folder
     * @param  string  $dir2  The path of the second folder
     * @param  bool  $recursive  Whether to compare subfolders recursively
     * @param  array  $ignores  Array of files to be ignored
     * @return bool|null Result of comparison or null if a folder not exists
     */
    public static function compareDirectories($dir1, $dir2, $recursive = false, $ignores = [])
    {
>>>>>>> 31d6e3b (first)
=======
     * @return bool|null Result of comparison or null if a folder not exists
     */
    public static function compareDirectories($dir1, $dir2, $recursive = false, $ignores = []) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
     * @return bool|null Result of comparison or null if a folder not exists
     */
    public static function compareDirectories($dir1, $dir2, $recursive = false, $ignores = []) {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
        // Open the first folder. Return if fails to open.

        if (! \is_resource($dirHandler = @opendir($dir1))) {
            return;
        }

        // Check if the second folder exists.

        if (! is_dir($dir2)) {
            return;
        }

        // Now, compare the folders.

        while (($file = readdir($dirHandler)) !== false) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 31d6e3b (first)
=======
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
            // Check if this file should be ignored.

            $filesToIgnore = array_merge($ignores, ['.', '..']);

            if (self::isIgnoredFile($file, $filesToIgnore)) {
                continue;
            }

            // Get paths of the resources to compare.

            $source = $dir1.\DIRECTORY_SEPARATOR.$file;
            $target = $dir2.\DIRECTORY_SEPARATOR.$file;

            // If the resources to compare are files, check that both files are
            // equals.

            if (is_file($source) && ! self::compareFiles($source, $target)) {
                return false;
            }

            // If the resources to compare are folders, recursively compare the
            // folders.

            $isDir = is_dir($source) && $recursive;

            if ($isDir && ! (bool) self::compareDirectories($source, $target, $recursive, $ignores)) {
                return false;
            }
        }

        // Close the opened folder.

        closedir($dirHandler);

        // At this point all the resources compared are equals.

        return true;
    }

    /**
     * Check if two files are equals by comparing sha1 hash values.
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
>>>>>>> 905478d7 (rebase)
     * @param string $file1 The first file
     * @param string $file2 The second file
     *
     * @return bool
     */
    public static function compareFiles($file1, $file2) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 905478d7 (rebase)
=======
     * @param  string  $file1  The first file
     * @param  string  $file2  The second file
     * @return bool
     */
    public static function compareFiles($file1, $file2)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param string $file1 The first file
     * @param string $file2 The second file
     *
     * @return bool
     */
    public static function compareFiles($file1, $file2) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
        if (! is_file($file1) || ! is_file($file2)) {
            return false;
        }

        return sha1_file($file1) === sha1_file($file2);
    }

    /**
     * Recursively delete a directory.
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
>>>>>>> 905478d7 (rebase)
     * @param string $dir The directory to remove
     *
     * @return bool
     */
    public static function removeDirectory($dir) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 905478d7 (rebase)
=======
     * @param  string  $dir  The directory to remove
     * @return bool
     */
    public static function removeDirectory($dir)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param string $dir The directory to remove
     *
     * @return bool
     */
    public static function removeDirectory($dir) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
        return File::deleteDirectory($dir);
    }

    /**
     * Get the fully qualified path to some package resource.
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
>>>>>>> 905478d7 (rebase)
     * @param string $path Relative path to the resource
     *
     * @return string Fully qualified path to the resource
     */
    public static function getPackagePath($path = null) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 905478d7 (rebase)
=======
     * @param  string  $path  Relative path to the resource
     * @return string Fully qualified path to the resource
     */
    public static function getPackagePath($path = null)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param string $path Relative path to the resource
     *
     * @return string Fully qualified path to the resource
     */
    public static function getPackagePath($path = null) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
        if (! $path) {
            return self::$packagePath;
        }

        return self::$packagePath.\DIRECTORY_SEPARATOR.$path;
    }

    /**
     * Get the fully qualified path to some package stub resource.
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
>>>>>>> 905478d7 (rebase)
     * @param string $path Relative path to the stub resource
     *
     * @return string Fully qualified path to the stub resource
     */
    public static function getStubPath($path = null) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 905478d7 (rebase)
=======
     * @param  string  $path  Relative path to the stub resource
     * @return string Fully qualified path to the stub resource
     */
    public static function getStubPath($path = null)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param string $path Relative path to the stub resource
     *
     * @return string Fully qualified path to the stub resource
     */
    public static function getStubPath($path = null) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
        if (! $path) {
            return self::$stubsPath;
        }

        return self::$stubsPath.\DIRECTORY_SEPARATOR.$path;
    }

    /**
     * Get the fully qualified path relative to the configured view path.
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
>>>>>>> 905478d7 (rebase)
     * @param string $path Relative path to some view
     *
     * @return string Fully qualified path to the view
     */
    public static function getViewPath($path = null) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 905478d7 (rebase)
=======
     * @param  string  $path  Relative path to some view
     * @return string Fully qualified path to the view
     */
    public static function getViewPath($path = null)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param string $path Relative path to some view
     *
     * @return string Fully qualified path to the view
     */
    public static function getViewPath($path = null) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
        $basePath = config('view.paths')[0] ?? resource_path('views');

        if (! $path) {
            return $basePath;
        }

        return $basePath.\DIRECTORY_SEPARATOR.$path;
    }

    /**
     * Check if a file is included in a set of ignored file patterns.
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
>>>>>>> 905478d7 (rebase)
     * @param string $file    The file to check
     * @param array  $ignores Array of file patterns to be ignored
     *
     * @return bool
     */
    protected static function isIgnoredFile($file, $ignores) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 905478d7 (rebase)
=======
     * @param  string  $file  The file to check
     * @param  array  $ignores  Array of file patterns to be ignored
     * @return bool
     */
    protected static function isIgnoredFile($file, $ignores)
    {
>>>>>>> 31d6e3b (first)
=======
     * @param string $file    The file to check
     * @param array  $ignores Array of file patterns to be ignored
     *
     * @return bool
     */
    protected static function isIgnoredFile($file, $ignores) {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
        foreach ($ignores as $pattern) {
            $match = Str::startsWith($pattern, 'regex:') ?
                     preg_match(Str::substr($pattern, 6), $file) :
                     Str::is($pattern, $file);

            if ($match) {
                return true;
            }
        }

        return false;
    }
}
