<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Database\Seeders\DatabaseSeeder;

class CustomSeed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:customseed {--count=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Custom seeder with parameters';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $count = $this->option('count');

        $db = new DatabaseSeeder();
        $db->run($count);
    }
}
