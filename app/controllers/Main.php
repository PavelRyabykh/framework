<?php

namespace app\controllers;


class Main extends App
{
    public function indexAction()
    {
        $this->layout = 'main';
        $this->view = 'test';
    }
}