<?php

namespace app\controllers;


use app\models\Main;

class MainController extends AppController
{
    public function indexAction()
    {
        $model = new Main();
        $posts = $model->findAll();
//        $post = $model->findBySQL("SELECT * FROM {$model->table} ORDER BY id DESC LIMIT 2");
//        $post = $model->findBySQL("SELECT * FROM {$model->table} WHERE name LIKE ?", ['%l%']);
        $post = $model->findLike('l', 'name');
        debug($post);
        $this->set(compact('posts'));
    }
}