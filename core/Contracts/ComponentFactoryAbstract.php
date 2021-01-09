<?php


namespace Aigletter\Core\Contracts;


abstract class ComponentFactoryAbstract
{
    public function createInstance()
    {
        return $this->createConcreteInstance();
    }

    protected abstract function createConcreteInstance();
}