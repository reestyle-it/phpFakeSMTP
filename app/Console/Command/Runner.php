<?php

namespace App\Console\Command;

class Runner extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fakesmtp:runner {port?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Start the FakeSMTP runner';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {


        return Command::SUCCESS;
    }
}
