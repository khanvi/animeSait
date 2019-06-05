<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<form method="POST" action="add_bd_anime.php" enctype="multipart/form-data">
		<h5> Добавить запись </h5>
			<input name="name" placeholder="name" class="form-control mb-1">
			<input name="text" placeholder="text" class="form-control mb-1">
			<input name="type" placeholder="type" class="form-control mb-1">
			<input name="year" placeholder="year" class="form-control mb-1">
			<input name="author" placeholder="author" class="form-control mb-1">
			<input type="file" name="img">
		<button class="btn btn-primary">OKAY</button>
	</form>
</body>
</html>