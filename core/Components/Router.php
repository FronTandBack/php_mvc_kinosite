<?php

namespace Core\Components;

class Router 
{
    protected static $routes = [];
    protected static $route = [];

    public static function add(array $route = []){
        // self::$routes = $route;
        array_push(self::$routes, $route);
    }

    public static function getRoutes(){
        return self::$routes;
    }


    public static function dispatch(string $uri) 
    {

        // var_dump(self::$routes);
        $arr = ["test" => 2, "Chidori" => 3];
        echo "<br>";
        foreach (self::$routes as $pattern => $path) {

            var_dump($pattern);
            // Сравниваем $uriPattern и $uri
            // if (preg_match("~$uriPattern~", $uri)) {

            //     // Получаем внутренний путь из внешнего согласно правилу.
            //     $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

            //     // Определить контроллер, action, параметры

            //     $segments = explode('/', $internalRoute);

            //     $controllerName = array_shift($segments) . 'Controller';
            //     $controllerName = ucfirst($controllerName);

            //     $actionName = 'action' . ucfirst(array_shift($segments));

            //     $parameters = $segments;

            //     // Подключить файл класса-контроллера
            //     $controllerFile = ROOT . '/controllers/' .
            //             $controllerName . '.php';

            //     if (file_exists($controllerFile)) {
            //         include_once($controllerFile);
            //     }

            //     // Создать объект, вызвать метод (т.е. action)
            //     $controllerObject = new $controllerName;

            //     /* Вызываем необходимый метод ($actionName) у определенного 
            //      * класса ($controllerObject) с заданными ($parameters) параметрами
            //      */
            //     $result = call_user_func_array([$controllerObject, $actionName], $parameters);

            //     // Если метод контроллера успешно вызван, завершаем работу роутера
            //     if ($result != null) {
            //         break;
            //     }
            // }
        }
    }


    public static function matchRoute(string $uri): bool{

        foreach(self::$routes as $pattern => $route){

            if(preg_match("#{$pattern}#i", $uri, $matches)){

                foreach($matches as $k => $v){
                    if(is_string($k)){
                        $route[$k] = $v;
                    }
                }

                if(empty($route['action']) ) {
                    $route['action'] = 'index';
                }

                // if(!isset($route['prefix'])) {
                //     $route['prefix'] = '';
                // }else{
                //     $route['prefix'] .= '\\';
                // }
                // $route['controller'] = self::upperCamelCase($route['controller']);
                $route['controller'] = ucfirst($route['controller']);
                self::$route = $route;
                return true;
            }
        }
        return false;
    }





}