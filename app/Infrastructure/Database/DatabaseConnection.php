<?php

declare(strict_types=1);

namespace App\Infrastructure\Database;

use Dotenv\Dotenv;

class DatabaseConnection
{
    public static function connect()
    {
        try{
            $dotenvPath = __DIR__ . '/../../../';
            $dotenv = Dotenv::createImmutable($dotenvPath)->load();
            //dd($dotenv);

            $database = $_ENV['DB_DATABASE'] ;
            $host = $_ENV['DB_HOST'];
            $user = $_ENV['DB_USERNAME'];
            $pass = $_ENV['DB_PASSWORD'];

            $dsn = "pgsql:host=$host;dbname=$database;port=5433;user=$user;password=$pass";

            //dd('conectou');
        
            return new \PDO($dsn);
        }catch(\PDOException $e){
            echo  'ERRO '.$e->getMessage();
        }
       
    }

}