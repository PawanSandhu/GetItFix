<?php

session_start();

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetItFix: Reviews</title>
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
     function validateFeedback(){
  var name = $("#name").val();
  var review = $("#review").val();
  if(name == ""){
    alert('Please enter your name');
  }
  else if(review == ""){
    alert('Please enter your feedback');
  }
  else {
    $.ajax({
        url: 'php_pages/feedback.php',
        type: 'POST',
        data: {
            postname:name,
             postreview:review
        },
        success: function(msg) {
          $('#review-form')[0].reset();
            alert (msg);
        }               
    });
    
  }
};

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


<div class="welcome-div">
  <div class="container">

    <?php
    echo '<h2 class="text-center"> Your feedback is important to us!</h2><br><br>
    <form id="review-form">
    <div class="form-group">
      <label for="name">Name *</label>
      <input type="text" class="form-control" id="name" placeholder="Your name" name="name" maxlength="30">
    </div>
    <div class="form-group">
    <label for="detail">Review</label>
      <textarea class="form-control" rows="5" id="review" placeholder="Your feedback" name="message" maxlength="300"></textarea>
    </div>
    <button type="button" id="submit" class="btn btn-whatever" onclick="validateFeedback()">Submit</button>
      
    </form>';
    
    ?>
  </div>
</div>


<hr>
<div class="cpyryt">© 2019 Copyright:GetItFixBondCleaning.com.au</div>


</body>
</html>

