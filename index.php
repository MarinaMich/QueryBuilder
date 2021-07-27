<?php 
include 'database/start.php';

/**
 * Вызываем метод getAll() класса QueryBuilder для вывода всех записей в таблице posts 
 * Полученный массив передаем в переменную $posts для вывода в цикле foreach на index.view.php
*/
$posts = $db->getAll('posts');

/* переходим на index.view.php*/

include 'view/index.view.php';


