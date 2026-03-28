<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Новая заявка</title>
	<link rel="stylesheet" href="../css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
</head>
<body>
	<div class="container">
		<header>
			
		</header>

		<div class="form-container border border-1 rounded offset-2">
			<h1>Подать заявку</h1>
		<form action="../handlers/app_h.php" method="POST">
			
			<div class="mb-3">
				<label for="course_name" class="form-label">Выберите курс</label>

				<select class="form-select" aria-label="Default select example" name="course_name" id="course_name">
  <option value="">Выберите курс</option>
  <option value="Английский язык">Английский язык</option>
  <option value="Русский язык">Русский язык</option>
  <option value="Математика">Математика</option>

</select>
				<div class="mb-3"></div>
			</div>
			<div class="form-group">
				<label  for="start_date">Желаемая дата начала</label>
				<input class=form-label type="date" id="start_date" name="start_date" required>
			</div>
			<div class="mb-3">
				<label>Способ оплаты</label>
				<div class="radio-group form-radio">
					<label>
						<input type="radio" name="pay_method" value="cash" checked> 
						Наличные
					</label>
					<label>
						<input type="radio" name="pay_method" value="phone"> 
						Перевод по телефону
					</label>
				</div>
</div>
			<div class="row text-center">
			<button class="col-6 btn btn-primary" type="submit">Отправить заявку</button>
			<a class="col-6 btn btn-secondary" href="dashboard.php">Назад</a>
			</div>
		</form>
</div>
			
	</div>
</body>
</html>