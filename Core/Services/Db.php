<?php

namespace Core\Services;

class Db
{
    private $pdo;
    private static $instance = null;

    private function __construct() //"private" скрывает конструктор
    {
        require_once __DIR__ . '/../../config.php';
        $this->pdo = new \PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass);
    }

    public function query(string $sql, array $params = [], $className = 'stdClass')
    {
        $stmt = $this->pdo->prepare($sql);
        $result = $stmt->execute($params);
        return $result !== false ? $stmt->fetchAll(\PDO::FETCH_CLASS, $className) : null;
    }

    static public function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self(); //создаем объект своего класса, при обращении к функции первый раз
        }
        return self::$instance;
    }
}
