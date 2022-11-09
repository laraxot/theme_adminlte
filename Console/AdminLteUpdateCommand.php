<?php

<<<<<<< HEAD
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
>>>>>>> 905478d7 (rebase)
=======
declare(strict_types=1);

>>>>>>> d79d738c (up)
namespace Themes\AdminLTE\Console;

use Illuminate\Console\Command;

<<<<<<< HEAD
<<<<<<< HEAD
class AdminLteUpdateCommand extends Command {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
class AdminLteUpdateCommand extends Command {
=======
class AdminLteUpdateCommand extends Command
{
>>>>>>> 31d6e3b (first)
=======
class AdminLteUpdateCommand extends Command {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
class AdminLteUpdateCommand extends Command {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
=======
class AdminLteUpdateCommand extends Command {
>>>>>>> d79d738c (up)
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'adminlte:update ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update all the required assets for AdminLTE';

    /**
     * Execute the console command.
     *
     * @return void
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function handle() {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function handle() {
=======
    public function handle()
    {
>>>>>>> 31d6e3b (first)
=======
    public function handle() {
>>>>>>> f405739 (up)
<<<<<<< HEAD
>>>>>>> f617437 (rebase)
=======
=======
    public function handle() {
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
=======
    public function handle() {
>>>>>>> d79d738c (up)
        $options = ['--force' => true, '--only' => ['assets']];

        $this->call('adminlte:install', $options);
    }
}
