<?php


namespace fw\core;


class App
{
    public static $app;

    public function __construct()
    {
        self::$app = Registry::getInstance();
        new ErrorHandler();
    }
}