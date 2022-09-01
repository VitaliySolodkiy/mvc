<?php

namespace Core\Controllers;

use Core\Views\View;
use Core\Helpers\Message;
use Core\Models\Author;
use Core\Services\Db;
use Core\Models\Book;


class HomeController extends Controller
{
    public function index()
    {
        $title = 'Home';
        $books = Book::all();

        // self::dump(Author::all());

        // self::dump(Book::find(1));

        View::render('home', compact('title', 'books'));
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
