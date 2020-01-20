<?php

namespace app\controllers;

use vendor\core\base\Controller;

class Posts extends Controller
{

    public function indexAction()
    {
        print 'Posts::index()';
    }

    public function testAction()
    {
        print 'Posts::test()';
    }

    public function testPageAction()
    {
        print 'Posts::testPage()';
    }

    public function before()
    {
        print 'Posts::before';
    }
}