<?php

namespace app\controllers;


use app\models\Main;

class MainController extends AppController
{
    public function indexAction()
    {
        $model = new Main();
        $posts = \R::findAll('posts');

        $this->setMeta('Главная страница', 'Описание страницы', 'Ключевые слова');
        $meta = $this->meta;
        $this->set(compact('posts', 'meta'));
    }
}