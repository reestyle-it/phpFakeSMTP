<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [];

    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
    }

    /**
     * Register the GLOBAL commands for the application.
     */
    protected function commands(): void
    {
        $paths = [
            __DIR__ . '/Commands',
        ];

        $this->load($paths);

        require base_path('routes/console.php');
    }
}
