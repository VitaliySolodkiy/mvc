<?php

use Core\Exceptions\NotFound;
use Core\Views\View;

require_once __DIR__ . '/vendor/autoload.php';

spl_autoload_register(function ($class) {
    if (file_exists("./$class.php"))
        require_once "./$class.php";
});
session_start();

try {
    Core\Route::start();
} catch (NotFound $error) {
    View::render('errors/404', [], 404);
} catch (Exception $error) {
    echo $error->getMessage();
}
