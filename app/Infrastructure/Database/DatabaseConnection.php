<?php

declare(strict_types=1);

namespace App\Infrastructure\Database;

use Dotenv\Dotenv;

class DatabaseConnection
{
    public static function connect()
    {
        try{
            $dotenv = Dotenv::createImmutable(__DIR__)->load();
            $database = $_ENV['DB_DATABASE'];
            $host = $_ENV['DB_HOST'];
            $dsn = "pgsql:dbname=$database;host=$host";
            return new \PDO($dsn, getenv('DB_USER'), getenv('DB_PASS'));
        }catch(\PDOException $e){
            echo $e->getMessage();
        }
       
    }

}