<?php

use Aigletter\Core\Components\Hello\HelloFactory;
use Aigletter\Core\Components\Router\RouterFactory;
use App\Component\Test\TestFactory;

return [
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
    ]
];