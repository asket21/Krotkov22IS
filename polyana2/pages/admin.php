<?php 
session_start();
if(isset($_SESSION["login"]) && $_SESSION['is_admin'] == 1):
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
<h1>Админка </h1>
<div>
    <h2>Заявки</h2>
    <h3>Зарезервировано</h3>
    <div>
        <?php
        $id=$_SESSION['id'];
        $orders=[];
        $db=new mysqli ("127.0.0.1","root","", "polyana");
        $q = "SELECT * 
        FROM orders
        WHERE status='new' ;";
        $orders = $db->query($q);
        $orders=$orders->fetch_all(MYSQLI_ASSOC);
        if (empty($orders)){
					echo ("<p class=\"alert alert-danger\">У вас пока нет новых заявок </p>");
				} else {

                foreach ($orders as $order) {
                    echo 
                    
                    
                    "
                    "

                    
                }

                }

        
        
        ?>

    </div>
    <h3>Выдано</h3>
    <div>
        <?php
        $id=$_SESSION['id'];
        $orders=[];
        $db=new mysqli ("127.0.0.1","root","", "polyana");
        $q = "SELECT * from orders" ;
        
        
        
        
        ?>

    </div>
    <h3>Возвращено</h3>
    <div>
        <?php
        $id=$_SESSION['id'];
        $orders=[];
        $db=new mysqli ("127.0.0.1","root","", "polyana");
        $q = "SELECT * from orders" ;
        
        
        
        
        ?>

    </div>
</div>

</body>
</html>


<?php 
else:   
     header('Location:catalog.php');
    ?>


<?php endif; ?>


<div>
        <h3>Номер заяки </h3>
        <p >Описание </p>
        <button><a href="new_order.php">Зарегистрироваться</a> </button>
    </div>