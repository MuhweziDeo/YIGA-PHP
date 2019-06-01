<?php

class Router 
{
    protected $routes = [];

    public static function load($file)
    {   
        $router = new static; //new self
        require $file;

        return $router;

    }

    public function define(Array $routes)
    {   
         $this->routes = $routes;
    }

    public function direct($uri)
    {
       if(array_key_exists($uri, $this->routes))
       {
            return $this->routes[$uri];
       }

       throw new Exception('no routes defined');
    }
     
}