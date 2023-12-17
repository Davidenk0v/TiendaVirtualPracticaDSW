<?php

namespace David\Shop\model;

use PDO;

class Database
{

    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "virtual_shop";
    private $dsn;
    public $link = null;
    function __construct()
    {
        $this->dsn = "mysql:host=$this->host;dbname=$this->database;charset=utf8mb4";
        $this->link = new \PDO($this->dsn, $this->user, $this->password);
    }

    function __destruct()
    {
        $this->link = null;
    }

    function selectAll($table)
    {
        $sql = "SELECT * FROM $table";
        return $this->link->query($sql);
    }

    function selectUser($email)
    {
        $stmt = $this->link->prepare('SELECT * FROM users WHERE email = :email');
        $stmt->execute([':email' => $email]);
        if ($user = $stmt->fetch(PDO::FETCH_OBJ)) {
            return $user;
        } else {
            return null;
        }
    }

    function insertUser($username, $email, $password, $user_number)
    {
        $stmt = $this->link->prepare('INSERT INTO users (username, email, password, user_number) VALUES (:username, :email, :password, :user_number)');
        $stmt->execute([':username' => $username, ':email' => $email, ':password' => $password, ':user_number' => $user_number]);
    }
}
