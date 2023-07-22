<?php

namespace IbrahimBougaoua\RadioButtonImage\Commands;

use Illuminate\Console\Command;

class RadioButtonImageCommand extends Command
{
    public $signature = 'radiobuttonimage';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
