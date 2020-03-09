<!DOCTYPE html>
<html>
<head>
	<title>kotoot</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2 class="text-center my-4">Laravel with MVC</h2>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<form method="POST" action="./store">
					{{csrf_field()}}
					<input type="text" name="name" placeholder="Enter Book Name" class="form-control"><br>
					<input type="text" name="author" placeholder="Enter Author Name" class="form-control"><br>
					<button class="btn btn-info">INSERT</button>
				</form>
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row mt-4">
			<div class="col-md-12">
				<table class="table">
					<tr>
						<th>ID</th>
						<th>Post Name</th>
						<th>Author</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
					<?php
					foreach ($posts as $key => $value) {
						?>
					<tr>
						<td><?php echo $value->id; ?></td>
						<td><?php echo $value->name; ?></td>
						<td><?php echo $value->author; ?></td>
						<td><a href="edit/<?php echo $value->id; ?>" class="btn btn-info">Edit</a></td>
						<td><a href="delete/<?php echo $value->id; ?>" class="btn btn-danger">Delete</a></td>
					</tr>
					<?php } ?>

				</table>
			</div>
		</div>
	</div>
</body>
</html>