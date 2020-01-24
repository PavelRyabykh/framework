<?php


namespace app\controllers;


use vendor\core\base\Controller;

class AppController extends Controller
{
    protected $meta = [];

    public function setMeta($title = '', $description = '', $keywords = '')
    {
        $this->meta['title'] = $title;
        $this->meta['description'] = $description;
        $this->meta['keywords'] = $keywords;
    }
}