<?php

use Core\Exceptions\NotFound;
use Core\Views\View;

spl_autoload_register(function ($class) {
    require_once "./$class.php";
});
session_start();

try {
    Core\Route::start();
} catch (NotFound $error) {
    View::render('errors/404', [], 404);
} catch (Exception $error) {
    echo $error->message;
}
