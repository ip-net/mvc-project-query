<?php


namespace App\Component\Test;


use Aigletter\Core\Contracts\ComponentAbstract;
use Aigletter\Core\Contracts\ComponentFactoryAbstract;

class TestFactory extends ComponentFactoryAbstract
{
    protected function createConcreteInstance(): ComponentAbstract
    {
        return new Test();
    }
}