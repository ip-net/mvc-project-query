<?php

/**
 * Конфигурационный файл приложения
 */

use Aigletter\Core\Components\Database\DbFactory;
use Aigletter\Core\Components\Hello\HelloFactory;
use Aigletter\Core\Components\Logger\LoggerFactory;
use Aigletter\Core\Components\Router\RouterFactory;
use App\Component\Test\TestFactory;

return [
    // Массив конфигураций сервисов
    'components' => [
        'router' => [
            'factory' => RouterFactory::class,
        ],
        'logger' => [
            'factory' => LoggerFactory::class,
            'params' => [
                'logFile' => $_SERVER['DOCUMENT_ROOT'] . '/../storage/logs/log.txt',
            ],
        ],
        'db' => [
            'factory' => DbFactory::class,
            'params' => [
                'dsn' => 'test',
                'user' => 'root',
                'password' => 'hello'
            ]
        ]
    ],
    // ...
    // Здесь могут содержаться другие настройки приложения, кроме сервисов
];