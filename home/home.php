<?php

session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body
        {
        background-image:url('../images/cacaa11091931d565bfab63f4303f2b4.gif');
        background-repeat: no-repeat;
        background-size: cover;
        }
    </style>
</head>
<body>
    <?php include('header.php'); ?>
    <div align='center' style= font-weight: bold;font-family:'verdana', Times, serif"><br><br><br><br>
        <h2>Swift Courier Management Service</h2>
        <h4>The fastest courier service of IIT</h4><br><br>
        <h3>DBMS TERM PROJECT</h3>
    </div>
</body>
</html>