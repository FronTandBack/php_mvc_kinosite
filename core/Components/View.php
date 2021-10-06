<?php

declare(strict_types=1);

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
        
        return $this->$name . ' View File ' . $this->params;
    }
}