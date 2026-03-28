<?php
session_start();
var_dump($_SESSION);
$user_id=(int)$_SESSION['id'];

$equipment_name=$_POST['equipment_name'];
$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];

$db=new mysqli ('127.0.0.1','root', '', 'polyana');

$q="INSERT INTO orders (user_id, equipment_name, start_date, end_date ) VALUES ('$user_id', '$equipment_name', '$start_date', '$end_date')";

$db->query($q);
?>

<script>
 	location.href="../pages/profile.php"
 </script>