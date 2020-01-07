<?php 
declare(strict_types=1);

class App
{
    protected static $registry = [];

    public static function bind(string $key, $value)
    {
        static::$registry[$key] = $value;
    }

    public static function get(string $key) // returned object or array???
    {
        if(! array_key_exists($key, static::$registry)) {
            throw new Exception("No {$key} is bound in the container.");
        }

        return static::$registry[$key];       
    }
}
