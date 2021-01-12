<?php


namespace Aigletter\Core\Components\Logger;


use Aigletter\Core\Contracts\ComponentAbstract;
use Aigletter\Core\Contracts\ComponentFactoryAbstract;
use Aigletter\Core\Contracts\ComponentInterface;

class LoggerFactory extends ComponentFactoryAbstract
{
    /**
     * Создает экземпляр логера
     *
     * @param array $params
     * @return ComponentInterface
     */
    protected function createConcreteInstance($params = []): ComponentInterface
    {
        $writer = new FileWriter($_SERVER['DOCUMENT_ROOT'] . '/../storage/logs/log.txt');
        $formatter = new TextFormatter();
        return new Logger($writer, $formatter);
    }
}