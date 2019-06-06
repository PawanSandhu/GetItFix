<?php

 
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
    <script src="libs/bootstrap/js/bootstrap.min.js"></script> 
</head>
 <body class="main-background">
    <?php
        $selector = $_GET["selector"];
        $validator = $_GET["validator"];

?>
        <div class="Login-form">
     <img src="images/logo_getitfix.png" alt="" class="avatar">
     <!-- <h2>Login Form</h2> -->
     <form class="signForm" action="php_pages/reset-password.php" method="post">
     

            <input type="hidden" name="selector" value="<?php echo $selector; ?>">
                    <input type="hidden" name="validator" value="<?php echo $validator; ?>">

                    <input type="password" class="login-inputt" name="pwd" placeholder="Enter a new password..">
                    
                    <input type="password" class="login-inputt"  name="pwd-repeat" placeholder="Repeat new password..">
                    <input type="submit" name="reset-password-submit" value="Reset password">
      
         
      
          
            <?php
                if (isset($_GET["newpwd"])) {
                    if ($_GET["newpwd"] == "passwordupdated") {
                        echo '<span class="login-blue" style="margin-top: 10px;">Password has been updated.</span>'; 
                    }
                    if ($_GET["newpwd"] == "timeout") {
                        echo '<span class="login-blue" style="margin-top: 10px;">Session time out.</span>'; 
                    }
                    if ($_GET["newpwd"] == "empty") {
                        echo '<span class="login-blue" style="margin-top: 10px;">Please enter a valid pasword.</span>'; 
                    }
                    if ($_GET["newpwd"] == "pwdnotsame") {
                        echo '<span class="login-blue" style="margin-top: 10px;">Password does not match.</span>'; 
                    }
                } 
                ?>
     </form>

   </div>
</body>
</html>