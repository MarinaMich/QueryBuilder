<?php 

include  __DIR__ . '/../database/start.php';

/* получаем id записи в таблице, которую удаляем */

$id = $_GET['id'];

/* Вызываем метод delete() класса QueryBuilder для удаления записи в таблице posts */

$db->delete('posts', $id);

/* переходим на главную страницу с измененным списком записей*/

header('Location: ../index.php');