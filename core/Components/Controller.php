<?php

declare(strict_types=1);

namespace Core\Components;

abstract class Controller {
    
    public function __construct()
    {
        print_r('Controller class');
    }
}