<?php

session_start();
// header('location:signin.html');

$con = mysqli_connect('localhost', 'root');
if($con){
    echo "<h2>Registered Succesfully, Now You Can Log in</h2>";
    echo "<br>";
    echo "<br>";
} else{
    echo "<h2>connection failed</h2>";
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
    echo "<h2>Wait! User Exist, Try Different User Id</h2>";
} else{
    $qy = "insert into signin(name,email,password) values('$name','$email','$pass')";

    mysqli_query($con, $qy);
}


?>