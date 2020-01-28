<?php


namespace app\controllers;


use fw\core\App;
use fw\core\base\Controller;
use fw\core\Registry;

class AppController extends Controller
{
    protected $meta = [];

    public function __construct($route)
    {
        parent::__construct($route);
    }

    public function setMeta($title = '', $description = '', $keywords = '')
    {
        $this->meta['title'] = $title;
        $this->meta['description'] = $description;
        $this->meta['keywords'] = $keywords;

    }
}