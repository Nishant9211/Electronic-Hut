<?php

session_start();
header('location:../index.html');

$con = mysqli_connect('localhost', 'root');
if($con){
    echo "connection successful";
    echo "<br>";
} else{
    echo "connection failed";
    echo "<br>";
}

mysqli_select_db($con, 'wd_project');

$name = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];

$q = "select * from signin where name = '$name' && password = '$pass'";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == "1"){
    $_SESSION['username'] = $name; 
    header('location:home.php');
} 
else{
    header('location:../signin.html');
}

?>