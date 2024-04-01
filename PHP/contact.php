<?php

session_start();
header('location:../contact_nofi.html');

$con = mysqli_connect('localhost', 'root');


mysqli_select_db($con, 'wd_project1');

$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];


$qy = "insert into contact(name,email,text) values('$name','$email','$text')";
mysqli_query($con, $qy);


?>