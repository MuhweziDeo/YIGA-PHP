<?php

class App
{
    protected static $registry;

    
    public static function bind($key, $value)
    {
        static::$registry[$key] = $value; 
    }

    public static function get($key)
    {   
        if(array_key_exists($key, App::$registry)){
            return App::$registry[$key]; 
        }
        throw new Exception("No {$key} in container");
        // return static::$registry[$key];
    }
}