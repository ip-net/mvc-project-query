<?php


namespace Aigletter\Core\Components\Hello;


use Aigletter\Core\Contracts\ComponentAbstract;
use Aigletter\Core\Contracts\ComponentFactoryAbstract;

/**
 * Class HelloFactory
 * Фабрика, умеющая создавать экземпляр бесполезного класса.
 * Использовали для демонстрации. В дальнейшем удалим.
 *
 * Паттерн Factory Method
 *
 * @package Aigletter\Core\Components\Hello
 */
class HelloFactory extends ComponentFactoryAbstract
{
    /**
     * Фабричный метод для создания экземпляра конкретного сервиса
     * @return ComponentAbstract
     */
    protected function createConcreteInstance(): ComponentAbstract
    {
        return new Hello('a', 'b');
    }
}