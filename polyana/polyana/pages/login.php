<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
</head>
<div class="container">
<body>
    <header> 
            <nav class="nav-header"> 
                <ul>
                    <li><a href="#">Каталог</a></li>
                    <li><a href="login.php">Авторизация</a></li>
                    <li><a href="register.php">Регистрация</a></li>
                </ul>  
            </nav>      
        </header>
        <main>
    <h2>Авторизация</h2>
<form id="loginForm" action='../handlers/login_h.php' method="POST">
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
</div>
<button type='submit'>Войти</button>
</form>



</div>
</div>
</main>
 <footer>
<footer>
        
</body>
</html>