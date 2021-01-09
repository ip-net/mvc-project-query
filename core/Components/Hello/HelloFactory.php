<?php


namespace Aigletter\Core\Components\Hello;


use Aigletter\Core\Contracts\ComponentFactoryAbstract;

class HelloFactory extends ComponentFactoryAbstract
{

    protected function createConcreteInstance()
    {
        // ...
        return new Hello('a', 'b');
    }
}