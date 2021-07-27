<?php

include __DIR__ .'/../database/start.php';

/**
 * Через $_GET получаем id записи в таблице, которую хотим просмотреть
 * Вызываем метод getOne() класса QueryBuilder для вывода одной записи из таблице posts
 * Полученный массив передаем в переменную $article для вывода заголовка и содержания записи
 */

$article = $db->getOne('posts', $_GET['id']);

?>
<h1><?php echo $article['title'];?></h1>
<div><?php echo $article['description'];?></div>