<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

require  '../vendor/autoload.php';

if( !session_id() ) @session_start();

//use DI\ContainerBuilder;
//use \Delight\Auth\Auth;

$containerBuilder = new DI\ContainerBuilder();
$containerBuilder->addDefinitions('../config/confDI.php');
$container = $containerBuilder->build();


$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/', ['App\controllers\HomeController', 'index']);
    $r->addRoute('GET', '/logout', ['App\controllers\UserController', 'logout']);
    $r->addRoute('GET', '/single-page[/{id:\d+}]', ['App\controllers\PostController', 'getOnePost']);
    $r->addRoute('GET', '/fake', ['App\controllers\HomeController', 'fake']);
    $r->addRoute('GET', '/addpost', ['App\controllers\HomeController', 'addpost']);
    $r->addRoute('POST', '/addposttodb', ['App\controllers\HomeController', 'addposttodb']);
    $r->addRoute('POST', '/registration', ['App\controllers\UserController', 'registration']);
    $r->addRoute('POST', '/addcomment', ['App\controllers\CommentController', 'addComment']);
    $r->addRoute('GET', '/loginform', ['App\controllers\UserController', 'loginform']);
    $r->addRoute('GET', '/register', ['App\controllers\UserController', 'register']);
    $r->addRoute('GET', '/ver', ['App\controllers\HomeController', 'email_verification']);
    $r->addRoute(['POST', 'GET'], '/login', ['App\controllers\UserController', 'login']);
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // ... 404 Not Found
        echo "404";
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        $container->call($routeInfo[1], $routeInfo[2]);
        break;
}



