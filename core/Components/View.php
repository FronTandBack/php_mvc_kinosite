<?php

declare(strict_types=1);

namespace Core\Components;

use Core\Components\IView;

class View implements IView
{
    private ?string $name;
    private ?array $params;

    public function __construct(string $name = null, array $params = null)
    {
        $this->name = $name;
        $this->params = $params;
    }


    public function renderView()
    {
        
        
        $pathView = TEMPLATE . '/' . $this->name;

        $pathView = str_replace('/', '\\', $pathView) . '.php';
        
        // print_r($pathView);
        include_once $pathView;
        // return $this->name . ' View File ' . $this->params;
    }
}