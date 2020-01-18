<?php


class Router
{
    protected static $routes = [];
    protected static $route = [];

    public static function add($regex, $route = [])
    {

        self::$routes[$regex] = $route;

    }

    public static function getRoutes()
    {

        return self::$routes;

    }

    public static function getRoute()
    {

        return self::$route;

    }

    public static function MatchRoute($url)
    {

        foreach(self::$routes as $pattern => $route)
        {
            if($pattern == $url) {
                self::$route = $route;
                return true;
            }
        }
        return false;

    }
}