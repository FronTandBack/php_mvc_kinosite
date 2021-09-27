<?php

declare(strict_types=1);

namespace App\Controllers;

use Core\Components\Controller;

class MainController extends Controller
{

    public function actionIndex(): bool
    {

        print_r('Hello action controller');
        return true;
    }
}