<?php

declare(strict_types=1);

namespace Core\Components;

use View;

abstract class Controller {
    
    public function __construct()
    {
        
    }

    public function render(string $viewName, array $viewParams)
    {

        $view = new View($viewName, $viewParams);

        $test = $view->renderView();
        var_dump($test);
        return true;
    }
}