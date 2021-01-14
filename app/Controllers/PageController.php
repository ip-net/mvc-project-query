<?php


namespace App\Controllers;


use Iliah\Core\Application;

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
       Application::getInstance()->get('db')->test();
    }

    /**
     * Действие обновление страницы
     */
    public function updateAction()
    {
        echo 'Update action';
    }
}