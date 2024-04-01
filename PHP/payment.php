<?php

session_start();
header('location:../payment_noti.html');

$con = mysqli_connect('localhost', 'root');


mysqli_select_db($con, 'wd_project2');

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$card_number = $_POST['card_number'];
$amount = $_POST['amount'];


$qy = "insert into payment(name,email,address,card_number,amount) values('$name','$email','$address','$card_number','$amount')";
mysqli_query($con, $qy);


?>