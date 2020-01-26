<?php

namespace app\controllers;


use app\models\Main;
use vendor\core\App;

class MainController extends AppController
{
    public function indexAction()
    {
        $model = new Main();
        \R::fancyDebug(true);
        $posts = App::$app->cache->get('posts');
        if(! $posts) {
            $posts = \R::findAll('posts');
            App::$app->cache->set('posts', $posts);
        }

        $this->setMeta('Главная страница', 'Описание страницы', 'Ключевые слова');
        $meta = $this->meta;
        $this->set(compact('posts', 'meta'));
    }
}