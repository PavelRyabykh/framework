<?php


namespace app\controllers;


use vendor\core\base\Controller;

class Page extends Controller
{
    public function viewAction()
    {
        debug($this->route);
        print 'Page::view()';
    }
}