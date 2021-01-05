<?php

use Aigletter\Core\Hello;
use Aigletter\Core\Router;

return [
    'components' => [
        'router' => [
            'class' => Router::class
        ],
        'hello' => [
            'class' => Hello::class,
        ]
    ]
];