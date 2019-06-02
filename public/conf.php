<?php
return [
    Engine::class => function() {return new Engine('../App/views');},

    PDO::class => function(){
    $driver = "mysql";
    $host = "localhost";
    $database_name = "blog";
    $username = "root";
    $password = "";
    return new PDO("$driver:dbname=$database_name;host=$host;charset=utf8", $username, $password);
    },

    Auth::class => function($container) {
    return new Auth($container->get('PDO'));
    }

];