<?php


class Mysql
{
    public static $pdo;
    public static function dbconnect()
    {
        if (self::$pdo == null){
            try {
                self::$pdo = new PDO('mysql:host='.DBHOST.';dbname='.DBNAME,DBUSER,DBPASSWORD,
                    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }catch(Exception $e){
                echo '<script>alert("Erro ao conectar com o banco de dados!!");</script>';
            }
        }
        return self::$pdo;
    }
}

?>
