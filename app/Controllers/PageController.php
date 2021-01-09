<?php


namespace App\Controllers;


use Aigletter\Core\Application;

class PageController
{

    public function indexAction()
    {
        echo 'IndexAction PageController';
    }

    public function viewAction()
    {
        $app = Application::getInstance();
        if ($app->has('test')) {
            echo $app->get('test')->run();
        }
    }

    public function updateAction()
    {
        echo 'Update action';
    }
}