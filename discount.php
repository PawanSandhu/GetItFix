<?php

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
  var discount = $("#discount").val();
  var amount = $("#amount").val();
  if(discount == ""){
    alert('Please enter discount details');
  }
  else if(amount == ""){
    alert('Please enter amount');
  }
  else {
    $.ajax({
        url: 'php_pages/offer.php',
        type: 'POST',
        data: {
            postdiscount:discount,
             postamount:amount
        },
        success: function(msg) {
          $('#review-form')[0].reset();
            alert (msg);
        }               
    });
    
  }
};

function deleteoffer(){
    $.ajax({
        url: 'php_pages/offerdelete.php',
      
        success: function(msg) {
          $('#review-form')[0].reset();
            alert (msg);
        }               
    });
    
  
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
    echo '<h2 class="text-center"> Discounts and Offers!</h2><br><br>
    <form id="review-form">
    <div class="form-group">
    <label for="detail">Discount offer</label>
      <textarea class="form-control" rows="5" id="discount" placeholder="Enter discount details" name="message" maxlength="300"></textarea>
    </div>
    <div class="form-group">
      <label for="name">Amount</label>
      <br><br>
      <select id="amount">
    <option value="10%">10%</option>
    <option value="15%">15%</option>
    <option value="20%">20%</option>
    <option value="25%">25%</option>
    <option value="30%">30%</option>
  </select>
  <br><br>
  
    
    </div>
    <button type="button" id="submit" name="insert" class="btn btn-whatever" onclick="validateFeedback()">Submit</button>
      <button type="button" id="delete" class="btn btn-whatever" onclick="deleteoffer()">Delete exsiting offer</button>
    </form>';

    
    ?>
  </div>
</div>


<hr>
<div class="cpyryt">© 2019 Copyright:GetItFixBondCleaning.com.au</div>


</body>
</html>

