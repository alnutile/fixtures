<?php

namespace Alnutile\Fixtures\Commands;

use Illuminate\Console\Command;

class FixturesCommand extends Command
{
    public $signature = 'fixtures';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
