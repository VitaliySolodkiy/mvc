<?php

namespace Core\Controllers;

use Core\Models\Author;
use Core\Views\View;

class AuthorController extends Controller
{
    public function show()
    {
        $authors = Author::all();
        View::render('authors/authors', compact('authors'));
    }

    public function authorCreate()
    {
        View::render('authors/author-create');
    }

    public function authorSave()
    {
        $FirstName = $_POST['FirstName'];
        $LastName = $_POST['LastName'];

        $author = new Author();
        $author->FirstName = $FirstName;
        $author->LastName = $LastName;

        $author->save(); //сохраняет в БД

        self::redirect('/authors');
    }
}
