<?php

namespace Core;

use Core\Exceptions\NotFound;

class Route
{
    static public function start() //function start method of some controller
    {
        $url = $_GET['url'] ?? '/';
        $routes = require_once './Core/web.php';

        //работаем с регулярными выражениями
        $isRouteFound = false;
        foreach ($routes as $route => $controllerAndMethod) {
            //чтобы из строки сделать регулярное выражение в начало и конец строки ставится '~'
            preg_match('~^' . $route . '$~', $url, $matches); //$matches - массив с результатами поиска
            if (!empty($matches)) {
                $isRouteFound = true;
                break; //при выходе из цикла, переменная $controllerAndMethod уже была инициализирована и она останется доступна за его пределами.
            }
        }

        //простая проверка по строке
        if (!$isRouteFound) {
            // die('Page not found');
            throw new NotFound();
        }
        list($nameController, $nameMethod) = $controllerAndMethod; //'HomeController', 'index'
        $classController = 'Core\\Controllers\\' . $nameController; // два слэша - это экранирование. хотя в новой версии php вроде и так работает
        if (!file_exists(($classController . '.php'))) {
            die("Controller $classController not found");
        }
        $objController = new $classController();
        if (!method_exists($objController, $nameMethod)) {
            die("Method $nameMethod not found");
        }
        unset($matches[0]);

        $objController->$nameMethod(...$matches); // ... - rest operator - расскладываем массив на элементы. Элементы массива подставляются в параметры
        //в функции контроллера нужно принимать столько параметров, столько будет элементов в массиве
    }
}
