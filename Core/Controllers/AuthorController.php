<?php

namespace Core\Controllers;

use Core\Exceptions\NotFound;
use Core\Models\Author;
use Core\Services\Db;
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
    public function edit()
    {
        $author = Author::find($_GET['id']);
        View::render('authors/edit', compact('author'));
    }
    public function update()
    {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $id = $_POST['id'];

        $author = Author::find($id);
        $author->FirstName = $firstName;
        $author->LastName = $lastName;

        $author->save();
        self::redirect('/authors');
    }

    public function delete()
    {
        $id = $_POST['id'];
        $author = Author::find($id); //у объекта свойства: id, name, price
        $author->remove();
        self::redirect('/authors');
    }
    public function showBooks($id)
    {
        $author = Author::find($id);
        if (!$author) {
            throw new NotFound();
        }
        $db = Db::getInstance();
        $authorsBooks = $db->query("SELECT * FROM books WHERE Id_Author={$author->ID}");


        View::render('authors/author-books', compact('author', 'authorsBooks'));
    }
}
