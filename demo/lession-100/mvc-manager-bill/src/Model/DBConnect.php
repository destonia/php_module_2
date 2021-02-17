<?php

namespace App\Model;
use PDO;
class DBConnect
{
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dsn = 'mysql:host=http://localhost/phpmyadmin;dbname=Bills';
        $this->username = 'root';
        $this->password = '19731858';
    }

    public function connect()
    {
        try {
            return new PDO($this->dsn, $this->username, $this->password);
        }catch (\PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }
}