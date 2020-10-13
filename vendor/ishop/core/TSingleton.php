<?php


namespace ishop;


trait TSingleton
{
    protected static $instance = null;

    private function __construct()
    { /* ... @return Singleton */
    }  // Защищаем от создания через new Singleton

    private function __clone()
    { /* ... @return Singleton */
    }  // Защищаем от создания через клонирование

    private function __wakeup()
    { /* ... @return Singleton */
    }  // Защищаем от создания через unserialize

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self;
        }
        return self::$instance;
    }

}
