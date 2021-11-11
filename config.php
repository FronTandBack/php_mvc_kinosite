<?php

require_once __DIR__.'./app/Database.php';
require_once __DIR__.'./app/Table.php';

use App\Table;
use App\Database;
use function DI\create;

return [
  'database' => create(Database::class),
  'table' => create(Table::class)
];