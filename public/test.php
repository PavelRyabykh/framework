<?php
require 'rb-mysql.php';
$db = require '../config/config_db.php';

//connect
R::setup('mysql:host=localhost;dbname=fw', 'root', '');
//var_dump(R::testConnection());

//create
//$cat = R::dispense('categories');
//$cat->title = 'Категория 3';
//$id = R::store($cat);
//var_dump($id);

//read
//$cat = R::load('categories', 2);
//print $cat->title;

//update
//$cat = R::load('categories', 3);
//$cat->title = 'Категория 3';
//R::store($cat);
//print $cat->title;

//delete
//$cat = R::load('categories', 2);
//R::trash($cat);
//Очистить таблицу
//R::wipe('categories');

//$cats = R::findAll('categories', 'title LIKE ? AND id > 5', ['%3%']);
//foreach($cats as $cat)
//{
//    print "{$cat['id']}. Название категории: $cat->title<br>";
//}

$cat = R::findOne('categories', 'id = 3');
print $cat->title;