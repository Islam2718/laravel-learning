<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class LogNotification extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'log:notification';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Log Notification generated into log file';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // creating a log notification from command line
        Log::info('Log Notification generated into log file.');
    }
}
