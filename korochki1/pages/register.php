<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Регистрация - Корочки.есть</title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

<link rel="stylesheet" href="../css/style.css">
</head>
</head>
<body>
	<div class="container">
		<header>
			<h1 class="text-center"> Добро пожаловать на портал "Корочки.есть"</h1>
</header>
		<div class="form-container border border-1 rounded offset-2">
			<h2 class="text-center">Регистрация</h2>
			<form id="registerForm" action="../handlers/register_h.php" method="POST">
				
			<div class="mb-3">
				<label for="login" class="form-label">Логин</label>
				<input type="text" class="form-control" id="login" name="login">
				<div class="form-text"></div>
			</div>
			
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Пароль</label>
				<input id="password" name="password" type="password" class="form-control" >
				<div class="form-text">Минимум 8 символов</div>
						</div>
			<div class="mb-3">
				<label for="email" class="form-label">Email</label>
				<input type="email" class="form-control" id="email" name="email" >
			</div>

			<div class="mb-3">
				<label for="full_name" class="form-label">ФИО</label>
				<input  type="text" class="form-control" id="full_name" name="full_name">
				<div class="form-text">Символы кириллицы и пробелы</div>
			</div>

			<div class="mb-3">
				<label for="phone" class="form-label">Телефон</label>
				<input  type="tel" class="form-control" id="phone" name="phone" placeholder="8(XXX)	XXX-XX-XX">
				
			</div>

 <div class="row text-center">
	<button class="col-6 btn btn-primary" type="submit">Создать пользователя</button>
	<p class="col-6">Уже зарегистрированы? <a class="btn btn-secondary" href="login.php">Войти</a></p>
</div>
		
		</form>
			
		</div>
		
	</div>

	
<script src="../js/validation.js"></script>

</body>
</html>