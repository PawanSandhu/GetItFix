<?php

// require "header.php";
 
 ?>




 <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetItFix: Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/responsive3.css" media="screen and (max-width: 1075px)" />
    <link rel="stylesheet" href="css/responsive2.css" media="screen and (max-width: 1024px)" />
    <link rel="stylesheet" href="css/responsive1.css" media="screen and (max-width: 768px)" />
    <link rel="stylesheet" href="css/responsive.css" media="screen and (max-width: 650px)" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="libs/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js"></script> 
</head>
 <body class="main-background">
   <div class="Login-form">
     <img src="images/logo_getitfix.png" alt="" class="avatar">
     <!-- <h2>Login Form</h2> -->
     <form class="signForm" action="php_pages/reset-request.php" method="post">
     <!-- <p class= "login-blue">Reset your password </p> -->
     
       <p>Email</p>
       <input type="email" class="login-inputt" id="email" name="email" placeholder="Enter your e-mail address">
      
       <input type="submit" id="reset-request-button" name="reset-request-submit" value="Reset password">
     
       <span class="login-blue" style="margin-top: 10px;">An email will be send to you with insrtuctions on how to reset your passward.</span>
      
       
     </form>
     <?php
 			    if (isset($_GET["reset"])) {
 			    	if ($_GET["reset"] == "success") {
 			    		echo '<p class="">Check your e-mail or spam`!</p>'; 
 			    	}
 			    } 
 			    ?>

   </div>
 </body>
 </html>
 