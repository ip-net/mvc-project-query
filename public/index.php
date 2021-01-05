<?php

ini_set('display_errors', '1');

use Aigletter\Core\Application;

require_once '../vendor/autoload.php';

$config = include '../config/main.php';

$app = Application::getInstance($config);
$app->run();

/*$hello = $app->get('hello');
$hello->test();*/

// end