<?php

class Database
{
    private $host = 'localhost';
    private $username = 'root';
    private $dbName = 'API_api';
    private $password = 'password';
    private $conn;

    public function connect()
    {
        $this->conn = null;
        try
        {
            $this->conn = new PDO('mysql:host=' . $this->host . ";dbname=" . $this->dbName,
                $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }catch (PDOException $e)
        {
            echo $e->getMessage();
        }

        return $this->conn;
    }
}
