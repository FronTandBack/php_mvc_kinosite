<?php 

declare(strict_types=1);

use Core\Components\Router;

Router::get(['index.php' => 'main/index']);
Router::get(['kinosite' => 'main/index']);
Router::get(['' => 'main/index']);
