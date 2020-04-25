<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Health Record | <?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="./css/header.css">
    <link rel="stylesheet" type="text/css" href="./css/footer.css">
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <link rel="stylesheet" type="text/css" href="./css/register.css">
</head>
<body>

<ul>
  <li><a href="./index.php">Home</a></li>
  <li><a href="./about.php">About</a></li>
  <li><a href="./contact.php">Contact</a></li>
  <?php 
    if(isset($_SESSION['user_id'])){?>
      <li style="float:right"><a class="active" href="./logout.php">Log Out</a></li>
      <li style="float:right"><a class="active" href="./profile.php"><?php echo $_SESSION['user_id'];  ?></a></li> <?php
    }else{?>
      <li style="float:right"><a class="active" href="./login.php">Log In</a></li>
      <li style="float:right"><a class="active" href="./register.php">Register</a></li> <?php
    }  
  ?>
  
</ul>
