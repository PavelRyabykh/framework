<?php

namespace app\controllers;


class Posts extends App
{

    public function indexAction()
    {
        $this->set(['name' => 'Paul']);
    }
}