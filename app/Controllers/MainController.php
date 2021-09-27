<?php

declare(strict_types=1);

namespace App\Controllers;

use Core\Components\Controller;

class MainController extends Controller
{

    public function actionIndex()
    {

        print_r('Hello action controller');

        return $this->render('home', [
            'name' => 'TheCodeholic'
        ]);
    }
}