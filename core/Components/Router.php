<?php

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

        // var_dump(self::$routes);
        $arr = ["test" => 2, "Chidori" => 3];
        echo "<br>";
        foreach (self::$routes as $routeKey => $routeValue) {

           $r = self::matchRoute($routeKey, $routeValue);
          
        }
    }


    private static function matchRoute(string $routeKey, string $routeValue): bool{

            $pattern = $routeKey;
            $uri = $routeValue;
            if (preg_match("#$pattern#", $uri)) {

                // Получаем внутренний путь из внешнего согласно правилу.
                $internalRoute = preg_replace("#$pattern#", $path, $uri);

                // Определить контроллер, action, параметры

                $segments = explode('/', $internalRoute);

                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName);

                $actionName = 'action' . ucfirst(array_shift($segments));

                $parameters = $segments;

                // Подключить файл класса-контроллера
                $controllerFile = ROOT . '/controllers/' .
                        $controllerName . '.php';

                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }

                // Создать объект, вызвать метод (т.е. action)
                $controllerObject = new $controllerName;

                /* Вызываем необходимый метод ($actionName) у определенного 
                 * класса ($controllerObject) с заданными ($parameters) параметрами
                 */
                $result = call_user_func_array([$controllerObject, $actionName], $parameters);

                // Если метод контроллера успешно вызван, завершаем работу роутера
                if ($result != null) {
                   return true;
                }
            }

            return false;
    }





}