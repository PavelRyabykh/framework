<?php


namespace app\controllers;



class PageController extends AppController
{
    public function viewAction()
    {
        debug($this->route);
        print 'Page::view()';
    }
}