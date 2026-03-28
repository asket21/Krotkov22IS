<?php
$login=$_POST['login'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$email=$_POST['email'];

$db=new mysqli ("127.0.0.1","root","","polyana");

$q="INSERT INTO users (login,password, phone, email) VALUES ('$login','$password','$phone','$email')";

$db->query($q);
?>

<script>
 	location.href="../pages/login.php"
 </script>