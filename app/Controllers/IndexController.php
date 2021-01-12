<?php


namespace App\Controllers;


use Aigletter\Core\Application;

/**
 * Class IndexController
 * Контроллер по умолчанию
 *
 * @package App\Controllers
 */
class IndexController
{
    /**
     * Действие по умолчанию
     */
    public function indexAction()
    {
        echo 'IndexAction IndexController';

        Application::getInstance()->get('logger')->debug('Test message');
    }
}