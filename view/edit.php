<?php
	include __DIR__ .'/../database/start.php';

/**
 * Через $_GET получаем id записи в таблице, которую хотим изменить
 * Вызываем метод getOne() класса QueryBuilder для вывода одной записи из таблице posts
 * Полученный массив передаем в переменную $article для подстановки данных в форму ниже
 */

	$article = $db->getOne('posts', $_GET['id']);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Post</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<form action="../functions/update.php?id=<? echo $article['id'];?>" method="post">
					<div class="form-group">
						<label for="">Title</label>
						<input type="text" name="title" class="form-control" value="<? echo $article['title'];?>">	
						<label for="">Description</label>
						<input type="text" name="description" class="form-control"value="<? echo $article['description'];?>">
					</div>
					<div class="form-group">
						<button class="btn btn-warning">Edit Post</button>	
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
