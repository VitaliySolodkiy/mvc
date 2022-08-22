<?php

namespace Core;

class Route
{
    static public function start() //function start method of some controller
    {
        $url = $_GET['url'] ?? '/';
        $routes = require_once './Core/web.php';
        if (!isset($routes[$url])) {
            die('Page not found');
        }
        list($nameController, $nameMethod) = $routes[$url]; //'HomeController', 'index'
        $classController = 'Core\\Controllers\\' . $nameController;
        if (!file_exists(($classController . '.php'))) {
            die("Controller $classController not found");
        }
        $objController = new $classController();
        if (!method_exists($objController, $nameMethod)) {
            die("Method $nameMethod not found");
        }
        $objController->$nameMethod();
    }
}
