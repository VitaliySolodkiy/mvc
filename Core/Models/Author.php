<?php

namespace Core\Models;

class Author extends Model
{
    public $FirstName;
    public $LastName;

    static public function getTable()
    {
        return 'authors';
    }
}
