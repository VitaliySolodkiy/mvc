<?php

namespace Core\Models;

use Core\Services\Db;

abstract class Model
{
    static public function all()
    {
        $db = Db::getInstance();
        return $db->query("SELECT * FROM " . static::getTable(), [], static::class); //позднее статическое связывание
    }
    static public function find($id)
    {
        $db = Db::getInstance();
        $result = $db->query("SELECT * FROM " . static::getTable() . " WHERE id=?", [$id], static::class); //static тут - это класс у которого мы вызываем этот метод
        return $result ? $result[0] : null;
    }

    public function save()
    {
        $reflection = new \ReflectionObject($this);
        $properties = $reflection->getProperties();

        $props = [];
        $propsToAdd = [];

        foreach ($properties as $property) {
            $name = $property->name;
            $props[] = $name;
            $propsToAdd[$name] = $this->$name;
        }

        // echo '<pre>' . print_r($propsToAdd, true) . '</pre>';


        // die();



        $db = Db::getInstance();
        $db->query('INSERT INTO ' . static::getTable() . ' (' . implode(', ', $props) . ') VALUES(:' . implode(', :', $props) . ')', $propsToAdd);
    }

    abstract static public function getTable(); //говорим что у всех дочерних класов должен быть такой метод. Чтобы это использовать сам родительский класс должен быть абстрактным (т.е. для него нельзя создавать эксземпляры класса)
}
