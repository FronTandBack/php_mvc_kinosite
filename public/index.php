<?php

declare(strict_types=1);


use Core\Components\Config;


ini_set('display_errors', '1');
error_reporting(E_ALL);





require_once dirname(__DIR__) . '/config/settings.php';
require_once CONFIG . '/routes.php';


$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));

$dotenv->load();


new \Core\App(new Config($_ENV));

