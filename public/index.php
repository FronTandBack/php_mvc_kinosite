<?php

declare(strict_types=1);

use App\Database;


ini_set('display_errors', '1');
error_reporting(E_ALL);



session_start();

require_once dirname(__DIR__) . '/config/settings.php';
require_once CONFIG . '/routes.php';

$table = new Table(new Database());



new \Core\App();


// use App\Table;
// use DI\ContainerBuilder;




// $containerBuilder = new ContainerBuilder();
// $containerBuilder->addDefinitions(__DIR__ . '/config.php');

// $container = $containerBuilder->build();

// $user = $container->get(Table::class);