<?php 

include  __DIR__ . '/../database/start.php';

/* получаем id записи в таблице, которую изменяем */

$id = $_GET['id'];

/* Вызываем метод update() класса QueryBuilder для удаления записи в таблице posts */

$db->update('posts', $_POST, $id);

/* переходим на главную страницу с измененным списком записей*/

header('Location: ../index.php');