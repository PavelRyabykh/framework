<?php


namespace app\controllers;



class Page extends App
{
    public function viewAction()
    {
        debug($this->route);
        print 'Page::view()';
    }
}