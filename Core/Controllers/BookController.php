<?php

namespace Core\Controllers;

use Core\Exceptions\NotFound;
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

        $book = new Book(); //null
        $book->Name = $name;
        $book->Price = $price;

        $book->save(); //сохраняет в БД. у объекта свойства: name, price

        self::redirect('/');
    }
    public function delete()
    {
        $id = $_POST['id'];
        $book = Book::find($id); //у объекта свойства: id, name, price
        $book->remove();
        self::redirect('/');
    }

    public function edit()
    {
        $book = Book::find($_GET['id']);
        View::render('books/edit', compact('book'));
    }
    public function update()
    {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $id = $_POST['id'];

        $book = Book::find($id);
        $book->Name = $name;
        $book->Price = $price;

        $book->save();
        self::redirect('/');
    }

    public function show($id)
    {
        // echo $id; //тут уже можно развернуто вывести все данные по книге
        $book = Book::find($id);
        if (!$book) {
            throw new NotFound();
        }
    }
}
