<?php


namespace Aigletter\Core\Components\Router;


use Aigletter\Core\Contracts\ComponentFactoryAbstract;

class RouterFactory extends ComponentFactoryAbstract
{
    protected function createConcreteInstance()
    {
        return new Router();
    }
}