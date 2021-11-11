<?php

namespace App;

class Table
{
    private $database;
    
    public function __construct(Database $database) {
        $this->database = $database;
        $this->database->connect();
    }
}