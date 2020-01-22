<?php

namespace app\controllers;


class PostsController extends AppController
{

    public function indexAction()
    {
        $this->set(['name' => 'Paul']);
    }
}