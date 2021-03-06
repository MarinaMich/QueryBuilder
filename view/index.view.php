<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
			    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			    <span class="sr-only">Toggle navigation</span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    </button>
			    <a class="navbar-brand" href="#">My Blog</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      	<ul class="nav navbar-nav">
			        <li class="active">
			        	<a href="index.php">MainPage<span class="sr-only">(current)</span></a>
			        </li>
		        </ul>  
		    </div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
<div class="container">
	<div class="row">
		<div class="col-md-12 offset-md-2">
			<a href="view/create.php" class="btn btn-success" >Add Post</a>
			<table class="table">
			  	<thead>
				    <tr>
					    <th scope="col">#</th>
					    <th scope="col">Title</th>
					    <th scope="col">Description</th>
					    <th scope="col">Actions</th>
				     </tr>
			  	</thead>
			    <tbody>
			    	<?php foreach ($posts as $post): ?>
					    <tr>
					      <th scope="row"><? echo $post['id'];?></th>
					        <td><a href="view/show.php?id=<? echo $post['id'];?>"><? echo $post['title'];?></a></td>
					      
					      	<td><? echo $post['description'];?></td>
					      	<td>
					      	<a href="view/edit.php?id=<? echo $post['id'];?>" class="btn btn-warning">Edit</a>
					      	<a href="functions/delete.php?id=<? echo $post['id'];?>" class="btn btn-danger" onclick="return confirm('???? ???????????????')" >Delete</a>
					      </td>
					    </tr>
					<?php endforeach; ?>
			    </tbody>
		    </table>
		</div>
	</div>
</div>
	

</body>
</html>