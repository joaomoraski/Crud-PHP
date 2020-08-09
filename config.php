<?php

    date_default_timezone_set('America/Sao_Paulo');
    $autoload = function($class){
        include('classes/'.$class.'.php');
    };
    spl_autoload_register($autoload);

    define('INCLUDE_PATH', 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'/../');

    define("DBHOST", "localhost");
    define("DBNAME", "CRUD");
    define("DBUSER", 'root');
    define("DBPASSWORD", '');

?>
