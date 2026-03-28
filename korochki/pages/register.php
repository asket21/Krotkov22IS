<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Регистрация - Корочки.есть</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<div class="container">
		<div class="form-container">
			<h2>Регистрация</h2>
			<form action="../handlers/register_h.php" method="POST">
				<div class="form-group">
					<label for="login">Логин:</label>
					<input id="login" name="login" type="text" required>
					<small>Латиница и цифры, не менее 6 символов</small>
				</div>
				<div class="form-group">
					<label for="password">Пароль:</label>
					<input id="password" name="password" type="password" required>
					<small>Минимум 8 символов</small>
				</div>
				<div class="form-group">
					<label for="full_name">ФИО:</label>
					<input  id="full_name" name="full_name" type="text" required>
					<small>Символы кириллицы и пробелы</small>
				</div>
				<div class="form-group">
					<label for="phone">Телефон:</label>
					<input  id="phone" name="phone" type="tel" required placeholder="8(XXX)	XXX-XX-XX">				
				</div>
				<div class="form-group">
					<label for="email">Email:</label>
					<input  id="email" name="email" type="email" required>				
				</div>
				<button type="submit">Создать пользователя</button>
			</form>
			<p>Уже зарегистрированы? <a href="login.php">Войти</a></p>
		</div>
	</div>



</body>
</html>