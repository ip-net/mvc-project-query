<?php

/**
 * @var $this Router
 */

use Aigletter\Core\Components\Router\Router;
use App\Controllers\PageController;

$this->addRoute(Router::METHOD_GET, '/page/view', [new PageController(), 'viewAction']);

$this->get('/', function(){
    echo 'Main page';
});