<?php

namespace Actuallyconnor\LaravelHarvestApi\Commands;

use Illuminate\Console\Command;

class LaravelHarvestApiCommand extends Command
{
    public $signature = 'laravel-harvest-api';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
