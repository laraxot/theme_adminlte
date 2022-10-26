<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
=======
declare(strict_types=1);

>>>>>>> f405739 (up)
namespace Themes\AdminLTE\Console;

use Illuminate\Console\Command;

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
    public function handle()
    {
>>>>>>> 31d6e3b (first)
=======
    public function handle() {
>>>>>>> f405739 (up)
        $options = ['--force' => true, '--only' => ['assets']];

        $this->call('adminlte:install', $options);
    }
}
