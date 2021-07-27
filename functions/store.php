<?php 

include  __DIR__ . '/../database/start.php';

/* Вызываем метод create() класса QueryBuilder для создания записи в таблице posts */

$db->create('posts', [
	'title' => $_POST['title'],
	'description' => $_POST['description'],
]);

/* переходим на главную страницу со списком записей*/

header('Location: ../index.php');