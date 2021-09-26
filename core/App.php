<?php

namespace Core;

use Core\Components\Router;

class App 
{
    
    public function __construct()
    {
        // $query = trim($_SERVER['QUERY_STRING'], '/');
        $query = self::getURI();
        
        print_r('Namespaceing working okay');
        Router::dispatch($query);

        
    }


    private static function getURI(): string
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }
}