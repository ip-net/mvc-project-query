<?php

/**
 * Конфигурационный файл приложения
 */

use Iliah\Core\Components\Database\DbFactory;
use Iliah\Core\Components\Hello\HelloFactory;
use Iliah\Core\Components\Logger\LoggerFactory;
use Iliah\Core\Components\Router\RouterFactory;
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