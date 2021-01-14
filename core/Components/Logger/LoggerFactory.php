<?php


namespace Iliah\Core\Components\Logger;


use Iliah\Core\Contracts\ComponentAbstract;
use Iliah\Core\Contracts\ComponentFactoryAbstract;
use Iliah\Core\Contracts\ComponentInterface;

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