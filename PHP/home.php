<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:../signin.html');
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body >
    <h1 style="color:#29ab87; text-align:center; margin: 90px 0; font-size: 60px">Welcome <?php echo $_SESSION['username']; ?></h1>


    <a href="../signin.html" style="padding:10px; display:inline-block; border: 3px solid #2bcbff; text-decoration: none; background-color: #2bcbff; color: #fff; margin-left:650px; border-radius: 30px">Log out</a>


    <a href="../index.html" style="padding:10px; display:inline-block; border: 3px solid #2bcbff; text-decoration: none; background-color: #2bcbff; color: #fff; margin-left:20px; border-radius: 30px">Go To Home</a>
</body>
</html>