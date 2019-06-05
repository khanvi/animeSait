<!DOCTYPE html>
<html lang="en" style="height: 100%">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-light" style="height: 100%">

	<div style="height: 10%">
		<a href="index.php">
			главная страница
		</a>
	</div>
	<div class="container">
				<div style="width: 500px; margin: 0 auto; text-align: center;">
					<div class="mb-2 border p-2">
						<div class="p">
							Регестрация
						</div>
						<form method="POST" action="reg_add_bd.php" enctype="multipart/form-data">
							<input name="mail" placeholder="e-mail" class="form-control mb-1">
							<input name="login" placeholder="login" class="form-control mb-1">
							<input name="name" placeholder="name" class="form-control mb-1">
							<input name="password" placeholder="password" class="form-control mb-1" type="password">
							<h5>загрузите аватарку</h5>
							<input type="file" name="img" class="mb-1">
							<button class="btn btn-primary">Зарегестрироваться</button>
						</form>
					</div>
				</div>
			</div>
	</div>
</body>
</html>