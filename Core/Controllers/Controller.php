<?php

namespace Core\Controllers;

class Controller
{
    static public function redirect($page)
    {
        header('location: ' . $page);
        exit();
    }
    static public function dump($obj)
    {
        echo '<pre>' . print_r($obj, true) . '</pre>';
    }
}
