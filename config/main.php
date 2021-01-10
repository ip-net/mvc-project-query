<?php

/**
 * Конфигурационный файл приложения
 */

use Aigletter\Core\Components\Hello\HelloFactory;
use Aigletter\Core\Components\Router\RouterFactory;
use App\Component\Test\TestFactory;

return [
    // Массив конфигураций сервисов
    'components' => [
        'router' => [
            'factory' => RouterFactory::class,
        ],
        'hello' => [
            'factory' => HelloFactory::class,
        ],
        'test' => [
            'factory' => TestFactory::class,
        ]
    ],
    // ...
    // Здесь могут содержаться другие настройки приложения, кроме сервисов
];