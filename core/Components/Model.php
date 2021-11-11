<?php

declare(strict_types=1);

namespace Core\Components;

use Core\Components\Database;
use Core\App;

abstract class Model implements IModel
{

    protected Database $db;
    public function __construct()
    {
        $this->db = App::getConnection();
    }
}