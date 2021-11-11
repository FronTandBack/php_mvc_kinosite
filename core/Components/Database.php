<?php

declare(strict_types=1);

namespace Core\Components;


use PDO;


class Database 
{
    private PDO $pdo;
    public function __construct(array $config)
    {
        
        try {
            $this->pdo = new PDO($config['$dsn'], $config['user'], $config['password']);

        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int) $e->getCode());
        }

    }
}