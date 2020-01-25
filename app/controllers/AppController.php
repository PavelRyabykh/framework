<?php


namespace app\controllers;


use vendor\core\base\Controller;
use vendor\core\Registry;

class AppController extends Controller
{
    protected $meta = [];
    protected $app;

    public function __construct($route)
    {
        parent::__construct($route);
        $this->app = Registry::getInstance();
    }

    public function setMeta($title = '', $description = '', $keywords = '')
    {
        $this->meta['title'] = $title;
        $this->meta['description'] = $description;
        $this->meta['keywords'] = $keywords;

    }
}