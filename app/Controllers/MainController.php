<?php

declare(strict_types=1);

namespace App\Controllers;

use Core\Components\Controller;

class MainController extends Controller
{

    public function actionIndex()
    {


        return $this->render('index', [
            'name' => 'TheCodeholic'
        ]);
    }
}