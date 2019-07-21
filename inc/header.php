<?php
ob_start();
session_start();
define('TITLE','Personal Tax Application')

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title><?php echo TITLE?></title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header id="header">
   <nav id="navigation">
      <div class="container clearfix">
         <div class="navleft">
            <a href="#"><?php echo TITLE?></a>
         </div>

         <div class="navBtn">
            <div class="navbar"></div>
            <div class="navbar"></div>
            <div class="navbar"></div>
         </div>

         <div class="navright">
            <a href="index.php">home</a>
            <a href="#">about</a>
            <a href="#">services</a>
            <a href="#">contact</a>
         </div>
      </div>
   </nav>
</header>
