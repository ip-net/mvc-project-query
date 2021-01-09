<?php


namespace Aigletter\Core\Components\Router;


use Aigletter\Core\Contracts\ComponentAbstract;

class Router extends ComponentAbstract
{
    public function route()
    {

        $path = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

        $controllerName = 'App\\Controllers\\IndexController';
        $actionName = 'indexAction';

        if (!empty($path[1])) {
            $controllerName = 'App\\Controllers\\' . ucfirst($path[1]) . 'Controller';

            if (isset($path[2])) {
                $actionName = $path[2] . 'Action';
            }
        }

        if (!class_exists($controllerName)) {
            throw new \Exception("Class not found");
        }

        $controller = new $controllerName();

        if (!method_exists($controller, $actionName)) {
            throw new \Exception('Action not found');
        }

        return function() use ($controller, $actionName){
            $controller->$actionName($this->getParams());
        };
    }

    public function getParams()
    {
        return $_GET;
    }
}