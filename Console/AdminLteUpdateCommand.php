<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 31d6e3b (first)
namespace Themes\AdminLTE\Console;

use Illuminate\Console\Command;

<<<<<<< HEAD
class AdminLteUpdateCommand extends Command {
=======
class AdminLteUpdateCommand extends Command
{
>>>>>>> 31d6e3b (first)
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
    public function handle() {
=======
    public function handle()
    {
>>>>>>> 31d6e3b (first)
        $options = ['--force' => true, '--only' => ['assets']];

        $this->call('adminlte:install', $options);
    }
}
