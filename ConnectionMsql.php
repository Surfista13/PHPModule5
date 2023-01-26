<?php
class ConnectionMsql {
    private static $pdo;

    static function getConnexion(){
        if(self::$pdo == null){
            $dsn = "mysql:host=localhost;dbname=tp";
            self::$pdo = new PDO($dsn, "root", "2099Bogus");
        }
        return self::$pdo;
    }
}


