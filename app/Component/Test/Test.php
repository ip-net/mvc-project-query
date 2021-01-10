<?php


namespace App\Component\Test;


use Aigletter\Core\Contracts\ComponentAbstract;

class Test extends ComponentAbstract
{
    public function run()
    {
        return 'Run test successfully';
    }
}