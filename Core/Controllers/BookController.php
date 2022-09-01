<?php

namespace Core\Controllers;

use Core\Models\Book;
use Core\Views\View;

class BookController extends Controller
{
    public function create()
    {
        View::render('books/create');
    }

    public function store()
    {
        $name = $_POST['name'];
        $price = $_POST['price'];

        $book = new Book();
        $book->Name = $name;
        $book->Price = $price;

        $book->save(); //сохраняет в БД

        self::redirect('/');
    }
}
