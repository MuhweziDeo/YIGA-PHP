<?php

class Connection 
{
    public static function make(Array $config)
    {
      
        try{
        
            // return $conn = new PDO('mysql:host=localhost;dbname=todos','root','password');
            return new PDO(
                $config['connection'] .';dbname=' .$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
            
        } catch(PDOException $e) {
                die($e->geMessage());
            
        }
        
    }
}