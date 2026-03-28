<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Корочки.есть - Портал доп.образования</title>
	<link rel="stylesheet" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<header>
			<h1 id="ooo"> Добро пожаловать на портал "Корочки.есть"</h1>
			<p>Система записи на онлайн курсы</p>
		</header>
		<main>
			<div class="auth-buttons">
				<a href="pages/login.php">Войти</a>
				<a href="pages/register.php">Регистрация</a>			</div>
		</main>
	</div>

	<button onclick="changecolor()"> Изменить цвет</button>

	<script>
		function changecolor() {
		const h1 = document.getElementById("ooo");
		const color = prompt("Введи цвет");
		h1.style.color = color;
	}
	</script>
</body>
</html>