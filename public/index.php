<?php

/**
 * Единая точка входа, куда сервер перенаправляет все запросы
 */

use Iliah\Core\Application;

// Включаем вывод ошибок, испольуется при разработке
ini_set('display_errors', '1');

// Подключаем автолоудер
require_once '../vendor/autoload.php';

// Получаем массив конфигураций приложения
$config = include '../config/main.php';

// Создаем экземпляр приложения и запускаем выполение
$app = Application::getInstance($config);
$app->run();