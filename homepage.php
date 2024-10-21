<?php
require_once 'config.php';
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div style="text-align:center; padding:15%;">
      <p  style="font-size:50px; font-weight:bold;">
       Hello  <?php  
       
       if(isset($_SESSION['email'])) {

        $email=$_SESSION['email'];
        
        echo $email;

       }

       ?>
          
          <br>
          <br>
          <br>
          
      <a href="logout.php">Logout</a>

    </div>

</body>
</html>