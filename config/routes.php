<?php 

declare(strict_types=1);

use Core\Components\Router;

Router::get(['index.php' => 'main/index'], 'get');
Router::get(['kinosite' => 'main/index'], 'get');
Router::get(['' => 'main/index'], 'get');