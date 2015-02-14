<?php namespace ThirdParty\Command;

use MODX\Shell\Command\BaseCmd;

class SampleCommand extends BaseCmd
{
    protected $name = 'thirdparty:sample';
    protected $description = 'Just a sample command';

    protected function process()
    {
        $this->info('This command just outputs something useless');
    }
}
