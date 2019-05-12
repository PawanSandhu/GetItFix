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
    <script type="text/javascript">
      function goToPrices() {

        window.location.href="edit-pricing.php";

      } 

         </script>
</head>

<body style="background-color: #dbcdbd;">  

            <div class="home-top-div">
              <div class="container">
              <div class="row">
                <div class="col-special text-center">
              <img class="home-page-logo float-md-left" src="images/logo_getitfix.png"> 
            </div>
            <div class="col-special text-center">
            <div class="home-top-info float-md-right">
                <button id="logout-btn" class="logout-btn" onclick="window.location.href = 'php_pages/logout.php';">LOG OUT</button>    
          </div>
        </div>
        </div>
      </div>
</div>


<div class="welcome-div text-center">
  <div class="container">

    <?php
    echo '<h2> Hi ' .$_SESSION['username']. ' !</h2><br><br>';
    if($_SESSION['username'] == 'admin') {
      echo '<div class="edit-price-div text-center">
  <a href="edit-pricing.php"><img src="images/hhh.png" style="width: 150px; height: 150px;"></a>
  <h5>Edit Prices</h5>
  </div>';
    }
    else {
      echo '<div class="review-div text-center">
  <a href="reviews.php"><img src="images/rev.png" style="width: 150px; height: 150px;"></a>
  <h5>Reviews</h5>
  </div>';
    }
    
    ?>
  </div>
</div>

<hr>
<div class="cpyryt">© 2019 Copyright:GetItFixBondCleaning.com.au</div>


</body>
</html>

