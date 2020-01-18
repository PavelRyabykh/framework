<?php
require '../vendor/core/Router.php';
require '../vendor/libs/functions.php';

$query = rtrim($_SERVER['QUERY_STRING'], '/');

Router::add('posts/view', ['controller' => 'Posts', 'action' => 'view']);
Router::add('posts', ['controller' => 'Posts', 'action' => 'index']);
Router::add('', ['controller' => 'Main', 'action' => 'index']);

debug(Router::getRoutes());

if(Router::MatchRoute($query)) {
    debug(Router::getRoute());
} else {
    print 404;
}