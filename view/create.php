<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Create Post</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<form action="../functions/store.php" method="post">
					<div class="form-group">
						<label for="">Title</label>
						<input type="text" name="title" class="form-control">	
						<label for="">Description</label>
						<input type="text" name="description" class="form-control">
					</div>
					<div class="form-group">
						<button class="btn btn-success">Add Post</button>	
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>