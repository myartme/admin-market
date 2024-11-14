<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ClearLogFile extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'logs:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear laravel.log';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        exec('>' . storage_path('logs/laravel.log'));
        $this->info('Logs have been cleared');
    }
}
