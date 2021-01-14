<?php


namespace App\Controllers;


use Iliah\Core\Application;

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