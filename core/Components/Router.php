<?php

declare(strict_types=1);

namespace Core\Components;

class Router 
{
    protected static $routes = [];
    protected static $route = [];

    public static function add(array $route = []){

        array_push(self::$routes, $route);

    }

    public static function getRoutes(){
        return self::$routes;
    }


    public static function dispatch(string $uri) 
    {

        foreach (self::$routes as $route) {

           $routeDone = self::matchRoute($route, $uri);
            
           if ($routeDone === true) {
               break;
           }
          
        }
    }

    public static function get(array $route = [])
    {
        self::add($route);
    }


    public static function post()
    {

    }


    private static function matchRoute(array $route, string $uri): bool{

            

            foreach ($route as $routeKey => $routeValue) {
                $pattern = $routeKey;
                $path = $routeValue;
            
                
                if (preg_match("#$pattern#", $uri)) {

                    

                    // Get internal route
                    $internalRoute = preg_replace("#$pattern#", $path, $uri);

                    // controller action and params

                    $segments = explode('/', $internalRoute);

                    $controllerName = array_shift($segments) . 'Controller';
                    $controllerName = ucfirst($controllerName);

                    $actionName = 'action' . ucfirst(array_shift($segments));

                    $parameters = $segments;

                    // include controller class
                    // $controllerFile = ROOT . '/app/Controllers/' .
                    //         $controllerName . '.php';

                    // if (file_exists($controllerFile)) {
                    //     include_once($controllerFile);
                    // }
                    
                    $controllerName = '\\App\\Controllers\\' . $controllerName;
                    // Create object
                    $controllerObject = new $controllerName;

                   
                    // call controller object with parameters 
                    $result = call_user_func_array([$controllerObject, $actionName], $parameters);

                    
                    if ($result != null) {
                        return true;
                    }
                }

                return false;
            }

            // return false;
    }





}