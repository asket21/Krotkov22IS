<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Вход - Корочки.есть</title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../css/style.css">
</head>
</head>
<body>
	<header>
			<h1 class="text-center"> Добро пожаловать на портал "Корочки.есть"</h1>
</header>
	<div class="container border border-1 rounded offset-2" >
		
		<div class="form-container ">
			<h2>Вход в систему</h2>
			<form id="loginForm" action="../handlers/login_h.php" method="POST">
				

				<div class="mb-3">
				<label for="login" class="form-label">Логин</label>
				<input type="text" class="form-control" id="login" name="login">
			

				<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Пароль</label>
				<input id="password" name="password" type="password" class="form-control" >
</div>
						
			<div class="mb-3">
					<div class="row text-center">
					<button  class="col-6 btn btn-success" type="submit">Войти</button>
					<p class="col-6">Еще не зарегистрированы? <a href="register.php">Зарегистрироваться</a></p>
					</div>
			
			</form>
			
		</div>
		</div>
	</div>

<script src="../js/validation.js"></script>
</body>
</html>
