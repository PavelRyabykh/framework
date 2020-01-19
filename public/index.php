<?php
require '../vendor/core/Router.php';
require '../vendor/libs/functions.php';

define('WWW', __DIR__);
define('CORE', dirname(__DIR__) . '/vendor/core');
define('ROOT', dirname(__DIR__));
define('APP', dirname(__DIR__) . '/app');

spl_autoload_register(function($class) {
    $file = APP . "/controllers/$class.php";
    if(file_exists($file)) {
        require_once $file;
    }
});

$query = rtrim($_SERVER['QUERY_STRING'], '/');

Router::add('^pages/?(?<action>[a-z-]+)?$', ['controller' => 'Posts']);
//Default routes
Router::add('^$', ['controller' => 'Main', 'action' => 'Index']);
Router::add('^(?<controller>[a-z-]+)/?(?<action>[a-z-]+)?$');

debug(Router::getRoutes());

Router::dispatch($query);