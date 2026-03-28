<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
</head>
<body>
    <header> 
            <nav class="nav-header"> 
                <ul>
                    <li><a href="catalog.php">Каталог</a></li>
                    <li><a href="login.php">Авторизация</a></li>
                    <li><a href="register.php">Регистрация</a></li>
                </ul>  
            </nav>      
        </header>
        <main>
    <h1>Офрмление Аренды</h1>
<form action="../handlers/add_h.php" method="POST">

<div>
    <h2>Подать заявку</h2>
    <div>
    <label for="equipment_name">Выберите снаряжение</label>
    <select name="equipment_name" id="equipment_name" aria-label="Default select example">
    <option value="tent">Палатка</option>
    <option value="carpet">Ковер</option>
    <option value="backpack">Рюкзак</option>
</select>
</div>
            <div >
				<label  for="start_date">Срок аренды</label>
				<input type="date" id="start_date" name="start_date" required>
				<input  type="date" id="end_date" name="end_date" required>
			</div>

<button type='submit'>Подать заявку</button>
</div>

</form>



</main>
 <footer>

        </footer>
        
</body>
</html>