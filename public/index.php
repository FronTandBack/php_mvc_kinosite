<?php

declare(strict_types=1);


// ini_set('display_errors', '1');
// error_reporting(E_ALL);



// session_start();

require_once dirname(__DIR__) . '/config/settings.php';
// require_once CONFIG . '/routes.php';

// new \Core\App();


use App\Database;
use App\Table;
use DI\ContainerBuilder;


$table = new Table(new Database());


$containerBuilder = new ContainerBuilder();
$containerBuilder->addDefinitions(__DIR__.'/config.php');

$container = $containerBuilder->build();

$user = $container->get(Table::class);