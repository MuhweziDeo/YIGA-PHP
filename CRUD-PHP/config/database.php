<?php
class Database
{
    private $username = "root";
    private $host = "localhost";
    private $password = "password";
    private $db_name = "php_oop_crud_level_1";
    public $conn;

    public function getConnection()
    {
        $this->conn;
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch (PDOException $exception){
            echo "Connection Error".$exception->getMessage();

        }
        return $this->conn;

    }
}


