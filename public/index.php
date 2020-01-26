<?php
error_reporting(-1);
use vendor\core\Router;

require '../vendor/libs/functions.php';

define('WWW', __DIR__);
define('CORE', dirname(__DIR__) . '/vendor/core');
define('ROOT', dirname(__DIR__));
define('APP', dirname(__DIR__) . '/app');
define('LIBS', dirname(__DIR__) . '/vendor/libs');
define('CACHE', dirname(__DIR__) . '/tmp/cache');
define('LAYOUT', 'default');

spl_autoload_register(function($class) {
    $file = ROOT . '/' . str_replace('\\', '/', $class) . '.php';
    if(file_exists($file)) {
        require_once $file;
    }
});

new \vendor\core\App();

$query = $_SERVER['QUERY_STRING'];

Router::add('^page/(?<action>[a-z-]+)/(?<alias>[a-z-]+)$', ['controller' => 'Page']);
Router::add('^page/(?<alias>[a-z-]+)$', ['controller' => 'Page', 'action' => 'view']);
//Default routes
Router::add('^$', ['controller' => 'Main', 'action' => 'Index']);
Router::add('^(?<controller>[a-z-]+)/?(?<action>[a-z-]+)?$');

Router::dispatch($query);