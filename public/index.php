<?php

declare(strict_types=1);

ini_set('display_errors', '1');
error_reporting(E_ALL);



session_start();

require_once dirname(__DIR__) . '/config/settings.php';
require_once CONFIG . '/routes.php';

new \Core\App();