<?php


namespace App\Controllers;


use Aigletter\Core\Application;

/**
 * Class PageController
 * Контроллер для обработки запросов каких-то страниц нашего прилоежения
 *
 * @package App\Controllers
 */
class PageController
{
    /**
     * Действие по умолчанию
     */
    public function indexAction()
    {
        echo 'IndexAction PageController';
    }

    /**
     * Действие посмотр страницы
     */
    public function viewAction()
    {
        $app = Application::getInstance();
        if ($app->has('test')) {
            echo $app->get('test')->run();
        }
    }

    /**
     * Действие обновление страницы
     */
    public function updateAction()
    {
        echo 'Update action';
    }
}