<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<div class="container">
<body>
    <header> 
            <nav class="nav-header"> 
                <ul>
                    <li><a href="#">Каталог</a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                </ul>  
            </nav>      
        </header>
        <main>
    <h2>Регистрация</h2>
<form id="registerForm" action="../handlers/register_h.php" method="POST">
    <div>
        <label for="login">Логин</label>
    <input type="text" id="login" name="login">
    <div class="form-text"></div>
</div>
    <div>
        <label for="password">Пароль</label>
    <input type="password" id="password" name="password">
    <div class="form-text"></div>
</div>
<div>
        <label for="phone">Телефон</label>
    <input type="text" id="phone" name="phone" placeholder="8(xxx) xxx-xx-xx">
    
</div>
<div>
        <label for="email">Email</label>
    <input type="email" id="email" name="email">
    
</div>
<div>

<button type="submit">Зарегистрироваться</button>

</form>



</div>
</div>
</main>
 <footer>

        </footer>
        
</body>
</html>