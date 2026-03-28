<?php 
session_start();
if (isset($_SESSION["login"]) && $_SESSION["is_admin"] == 1):
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
</head>
<body>
    <header> 
            <nav class="nav-header"> 
                <ul>
                    <!-- <li><a href="catalog.php"></a></li> -->
                    <!-- <!-- <li><a href="login.php">Авторизация</a></li> -->
                    <li><a href="profile.php">Личное Меню</a></li>
                    <li><a href="admin.php">Заявки </a></li>
                    <li><a href="new_order.php">Оформление аренды</a></li>
                    <li><a class="nav-link" href="logout.php">Выход</a></li>

                </ul>  
            </nav>      
        </header>
        <main>
    <h1>Каталог</h2>

    <h2>Доступное снаряжение для бронирования </h2>

    <div class='card'>
        <h3>Палатка</h3>
        <p >Описание </p>
        <button><a href="new_order.php">Арендовать</a> </button>
    </div>

    <div class='card'>
        <h3>Рюкзак</h3>
        <p >Описание </p>
        <button><a href="new_order.php">Арендовать</a> </button>
    </div>
    
    <div class='card'>
        <h3>Ковер</h3>
        <p >Описание </p>
        <button><a href="new_order.php">Арендовать</a> </button>
    </div>

</main>
 <footer>

        </footer>
        
</body>
</html>

<?php elseif (isset($_SESSION["login"])): 
    
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
</head>
<body>
    <header> 
            <nav class="nav-header"> 
                <ul>
                    <!-- <li><a href="catalog.php"></a></li> -->
                    <!-- <!-- <li><a href="login.php">Авторизация</a></li> -->
                    <li><a href="profile.php">Личное Меню</a></li>
                    <li><a href="profile.php">Заявки </a></li>
                    <li><a href="new_order.php">Оформление аренды</a></li>
                    <li><a class="nav-link" href="logout.php">Выход</a></li>

                </ul>  
            </nav>      
        </header>
        <main>
    <h1>Каталог</h2>

    <h2>Доступное снаряжение для бронирования </h2>

    <div class='card'>
        <h3>Палатка</h3>
        <p >Описание </p>
        <button><a href="new_order.php">Арендовать</a> </button>
    </div>

    <div class='card'>
        <h3>Рюкзак</h3>
        <p >Описание </p>
        <button><a href="new_order.php">Арендовать</a> </button>
    </div>
    
    <div class='card'>
        <h3>Ковер</h3>
        <p >Описание </p>
        <button><a href="new_order.php">Арендовать</a> </button>
    </div>

</main>
 <footer>

        </footer>
        
</body>
</html>
<?php 
else: ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
</head>
<body>
    <header> 
            <nav class="nav-header"> 
                <ul>
                    <!-- <li><a href="catalog.php"></a></li> -->
                    <li><a href="login.php">Авторизация</a></li>
                    <li><a href="register.php">Регистрация</a></li>
                    <li><a href="new_order.php">Оформление аренды</a></li>
                </ul>  
            </nav>      
        </header>
        <main>
    <h1>Каталог</h2>

    <h2>Доступное снаряжение для бронирования </h2>

    <div class='card'>
        <h3>Палатка</h3>
        <p >Описание </p>
        <button><a href="new_order.php">Зарегистрироваться</a> </button>
    </div>

    <div class='card'>
        <h3>Рюкзак</h3>
        <p >Описание </p>
        <button><a href="new_order.php">Зарегистрироваться</a> </button>
    </div>
    
    <div class='card'>
        <h3>Ковер</h3>
        <p >Описание </p>
        <button><a href="new_order.php">Зарегистрироваться</a> </button>
    </div>

</main>
 <footer>

</footer>
        
</body>
</html>

<?php 
endif; ?>    