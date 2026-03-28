<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Вход - Корочки.есть</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<div class="container">
		<div class="form-container">
			<h2>Вход в систему</h2>
			<form action="../handlers/login_h.php" method="POST">
				<div class="form-group">
					<label for="login">Логин:</label>
					<input id="login" name="login" type="text" required>
				</div>
				<div class="form-group">
					<label for="password">Пароль:</label>
					<input id="password" name="password" type="password" required>
				</div>
				
				<button type="submit">Войти</button>
			</form>
			<p>Еще не зарегистрированы? <a href="register.php">Зарегистрироваться</a></p>
		</div>
	</div>
</body>
</html>
