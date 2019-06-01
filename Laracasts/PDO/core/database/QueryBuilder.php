<?php

class QueryBuilder
{
    protected $conn;

    function __construct ($conn)
    {
        $this->conn = $conn;
    }

    function selectAll($table)
    {
        $stmt = $this->conn->prepare("select * from {$table}");

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
}