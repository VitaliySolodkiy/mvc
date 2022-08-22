<?php

namespace Core\Views;

class View
{
    static public function render(string $path, array $data = [])
    {

        extract($data);
        unset($data);

        require_once './Core/Views/Template/header.php';
        require_once './Core/Views/Template/' . $path . '.php';
        require_once './Core/Views/Template/footer.php';
    }
}
