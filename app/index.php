<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Database;
use App\Table;
use DI\ContainerBuilder;


$table = new Table(new Database());


$containerBuilder = new ContainerBuilder();
$containerBuilder->addDefinitions(__DIR__.'/config.php');

$container = $containerBuilder->build();

$user = $container->get(Table::class);