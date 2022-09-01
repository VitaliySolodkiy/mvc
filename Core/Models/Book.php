<?php

namespace Core\Models;

use Core\Services\Db;

class Book extends Model
{
    public $Name;
    public $Price;



    static public function getTable()
    {
        return 'books';
    }
    // static public function all()
    // {
    //     $db = new Db();
    //     return $db->query('SELECT * FROM books');
    // }
}
