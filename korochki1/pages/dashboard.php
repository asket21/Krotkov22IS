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
	<title>Личный кабинет</title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../css/style.css">
</head>
</head>
<body>
	<div class="container">
		<header >
			

			<nav class="navbar navbar-expand-lg " style="background-color: #e3f2fd;" data-bs-theme="light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Меню</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard.php">Мои заявки</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="new_order.php">Подать заявку</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Выход</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<h1>Добро пожаловать, <?php print($_SESSION["full_name"]); ?> </h1>
			<p>Вы вошли как <?php print($_SESSION["login"]); ?></p>
		</header>

		<main>
<div class="container">
			<h2>Мои заявки</h2>
			<div class="row">
			<?php 
				$id=$_SESSION["id"];
				$orders=[];
				$db=new mysqli ("127.0.0.1","root","","korochki");
				$q="SELECT id,course_name,start_date,pay_method,status,created_at 
				    FROM courses
				    WHERE user_id='$id'
				    ORDER BY created_at";
				$orders=$db->query($q);
				$orders=$orders->fetch_all(MYSQLI_ASSOC);

				if (empty($orders)){
					echo ("<p class=\"alert alert-danger\">У вас пока нет заявок </p>");
				} else {
					// echo "<div class=\"card\" style=\"width: 18rem;\">";
	// 				echo "<div class=\"card-body\">
    // <h5 class=\"card-title\">Название курса</h5>
    // <h6 class=\"card-subtitle mb-2 text-body-secondary\">Описание курса</h6>
    // <p class=\"card-text\">Здесь было ваше описание из бд</p>\n
	// <p class=\"card-text\">Дата начала: </p><p></p>\n
	// <p class=\"card-text\">Способ оплаты: </p><p></p>\n
	// <p class=\"card-text\">Cтатус: </p><p></p>\n
	// <p class=\"card-text\">Дата заявки: </p><p></p>\n
    // <a href=\"#\" class=\"card-link\">Ссылка на курс</a>
    
//   </div>";
				

					foreach ($orders as $order){
						
						echo "<div class=\"card col-3\" style=\"width: 18rem;\"><div class=\"card-body\">
    <h5 class=\"card-title\">{$order["course_name"]}</h5>
    <h6 class=\"card-subtitle mb-2 text-body-secondary\">Описание курса</h6>
    <p class=\"card-text\">Здесь было ваше описание из бд</p>\n
	<p class=\"card-text\">Дата начала: </p><p>{$order["start_date"]}</p>\n
	<p class=\"card-text\">Способ оплаты: </p><p>{$order["pay_method"]}</p>\n
	<p class=\"card-text\">Cтатус: </p><p>{$order["status"]}</p>\n
	<p class=\"card-text\">Дата заявки: </p><p>{$order["created_at"]}</p>\n
    <a href=\"#\" class=\"card-link\">Ссылка на курс</a>
   </div> 
  </div>";
					}

					echo "</tbody></table>";
				}
			 ?>
			 </div> 
			 </div> 
		</main>
	</div>


	
	
  
</div>
		
	

</body>
</html>

