<?php

namespace Core\Views;

class View
{
    static public function render(string $path, array $data = [], int $code = 200)
    {
        http_response_code($code);
        extract($data);
        unset($data);

        require_once './Core/Views/Template/header.php';
        require_once './Core/Views/Template/' . $path . '.php';
        require_once './Core/Views/Template/footer.php';
    }
}
