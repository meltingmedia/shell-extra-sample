<?php namespace ThirdParty\Command;

use MODX\Shell\Command\BaseCmd;

class SampleCommand2 extends BaseCmd
{
    protected $name = 'thirdparty:sample2';
    protected $description = 'Just a sample command again';

    protected function process()
    {
        $this->info('This command just outputs something useless');
    }
}
