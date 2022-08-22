<?php

namespace Core\Controllers;

use Core\Views\View;
use Core\Helpers\Message;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Home';
        $articles = [
            [
                'id' => 1,
                'title' => 'Article 1',
                'content' => 'Content for Article 1',
            ],
            [
                'id' => 2,
                'title' => 'Article 2',
                'content' => 'Content for Article 2',
            ],
        ];
        View::render('home', compact('title', 'articles'));
    }
    public function contacts()
    {
        $title = 'Contact Us';
        View::render('contacts', compact('title'));
    }

    public function sendEmail()
    {
        $email = $_POST['email'] ?? '';
        $subject = $_POST['subject'] ?? '';
        $message = $_POST['message'] ?? '';
        mail('test@gmail.com', $subject, "$email $message");
        Message::set('Thak you! Email has been sent');
        self::redirect('/contacts');
    }
}
