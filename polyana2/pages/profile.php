<?php 
session_start();
if(!isset($_SESSION["login"])){
	header('Location:login.php');
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личное меню</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
</head>
<body>
    <header> 
            <nav class="nav-header"> 
                <ul>
                    <li><a href="catalog.php">Каталог</a></li>
                    <!-- <li><a href="login.php">Авторизация</a></li>
                    <li><a href="register.php">Регистрация</a></li> -->
                    <li><a href="new_order.php">Оформление аренды</a></li>
                    <li><a class="nav-link" href="logout.php">Выход</a></li>

                </ul>  
            </nav>      
        </header>
        <main>
    <h1>Личное меню</h2>

    <h2>Ваши заказы </h2>

    <div class='card'>
        <h3>Название снаряжения</h3>
        <p>Дата аренды</p>
        <button><a href="new_order.php">Вернуть</a> </button>
    </div>


</main>
 <footer>

        </footer>
        
</body>
</html>