<?php

session_start();

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetItFix: Welcome</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <!-- <link rel="stylesheet" type="text/css" href="css/animate_styles.css" /> -->
    <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/responsive3.css" media="screen and (max-width: 1075px)" />
    <link rel="stylesheet" href="css/responsive2.css" media="screen and (max-width: 1024px)" />
    <link rel="stylesheet" href="css/responsive1.css" media="screen and (max-width: 768px)" />
    <link rel="stylesheet" href="css/responsive.css" media="screen and (max-width: 650px)" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="libs/jquery-3.3.1.min.js"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js"></script>

</head>

<body>  

            <div class="home-top-div">
              <div class="container">
              <div class="row">
                <div class="col-special text-center">
              <img class="home-page-logo float-md-left" src="images/logo_getitfix.png"> 
            </div>
            <div class="col-special text-center">
            <div class="home-top-info float-md-right">
                <button id="logout-btn" class="logout-btn" onclick="window.location.href = 'php_pages/logout.php'">LOG OUT</button>    
          </div>
        </div>
        </div>
      </div>
</div>


<div class="welcome-div">
  <div class="container">

    <?php
    echo '<p> Hi ' .$_SESSION['username']. ' !</p>';
    ?>
  </div>
</div>
</body>
</html>

