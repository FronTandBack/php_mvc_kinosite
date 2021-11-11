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
        
        var_dump($this->params);
        // return $this->name . ' View File ' . $this->params;
    }
}