<?php 


$login=$_POST['login'];
$password=$_POST['password'];

$db=new mysqli ("127.0.0.1", 'root', '', 'polyana');

$q="SELECT * FROM users WHERE login='$login' AND password='$password'";

$user=$db-> query($q);



if ($user->num_rows > 0) {

$user=$user -> fetch_assoc();
session_start();
$_SESSION['login']=$user['login'];
$_SESSION['id']=$user['id'];
}
?>
<script>
 	location.href="../pages/catalog.php"
 </script>