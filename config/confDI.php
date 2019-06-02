<?php

use \Delight\Auth\Auth;
use League\Plates\Engine;
use Intervention\Image\ImageManager;

return [
    Engine::class => function() {return new Engine('../App/views');},

    ImageManager::class => function () {
    return new ImageManager(array('driver' => 'imagick'));
    },

    PDO::class => function(){
    $driver = "mysql";
    $host = "localhost";
    $database_name = "blog";
    $username = "root";
    $password = "";

    $dbOptions = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    return new PDO("$driver:dbname=$database_name;host=$host;charset=utf8", $username, $password, $dbOptions);
    },

    Auth::class => function($container) {
    return new Auth($container->get('PDO'), null, null, false);
    }

];