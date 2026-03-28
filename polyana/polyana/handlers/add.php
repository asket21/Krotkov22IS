<?php
$equipment_name=$_POST['equipment_name'];
$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];

$db=new mysqli ('127.0.0.2','root', '', 'polyana');

$q='INSERT INTO orders (user_id,equipment_name, start_date,end_date, status) VALUES ('$user_id', '$equipment_name', '$start_date', '$end_date', 'Зарезервировано')'


?>