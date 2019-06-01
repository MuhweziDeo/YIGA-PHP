<?php

class Posts {
    private $conn;
    private $table = 'posts';
    public $id;
    public $category_id;
    public $category_name;
    public $title;
    public $body;
    public $author;
    public $create_at;

    public function __construct($db)
    {
        $this->conn = $db;

    }

    // Get Posts
    public function read()
    {
        // Create query
        $query = '
        SELECT 
          c.name as category_name, p.id,
          p.category_id, p.title, 
          p.body, p.author, p.created_at
        FROM ' . $this->table . ' p
        LEFT JOIN
          categories c ON p.category_id = c.id
        ORDER BY p.created_at DESC';

        $stmt = $this->conn->prepare($query);
        // Execute query
        $stmt->execute();
        return $stmt;
    }

    public function get_single()
    {
        // Create query
        $query = '
        SELECT 
          c.name as category_name, p.id,
          p.category_id, p.title, 
          p.body, p.author, p.created_at
        FROM ' . $this->table . ' p
        LEFT JOIN
          categories c ON p.category_id = c.id
        WHERE p.id = ? LIMIT 0,1';
        $stmt = $this->conn->prepare($query);
        // Execute query
        $stmt->bindParam(1,$this->id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->title = $row['title'];
        $this->author = $row['author'];
        $this->body = $row['body'];
        $this->category_name = $row['category_name'];
        $this->category_id = $row['category_id'];
        $this->id = $row['id'];

    }



}
