<?php

declare(strict_types=1);

namespace Core;

use Core\Components\Config;
use Core\Components\Router;
use Core\Components\Database;
use Core\Components\Session;

class App 
{
    
    private static Database $db;
    public Session $session;
    public function __construct(private Config $config)
    {

        static::$db = new Database($config->db ?? []);


        $this->session = new Session();

        $query = self::getURI();
        
        Router::dispatch($query);

        
    }

    public static function getConnection(): Database
    {
        return static::$db;
    }


    private static function getURI(): string
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }
}