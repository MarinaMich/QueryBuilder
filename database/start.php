<?php

/**
 *  Стартовая информация для связи с БД для любой страницы сайта
 */

$config = include  __DIR__ . '/../config.php';
include 'QueryBuilder.php';
include 'Connection.php';

/* Создание объекта QueryBuilder для создания запросов к таблицам конкретной базы данных */
$db = new QueryBuilder(Connection::make($config['database']));
