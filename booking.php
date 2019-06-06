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

      function deleteRecord(id){
        console.log("id is", id);
        $.ajax({
        url: 'php_pages/delete-booking.php',
        type: 'POST',
        data: {
             id:id
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

 

<div class="admin-quote">
  <h1>Bookings</h1>
  <hr style="height:3px; width:50px; border-top:2px solid #00b5f1" />
  


     <?php
    require 'php_pages/db_conn.php';
    
   $result = $conn->query('SELECT * FROM BookService');
   $num = mysqli_num_rows($result);
   
  
while($row = $result->fetch_assoc()){
  if($row["Id"]%2){
  echo '
<div class="admin-booking">
  <div class="admin-cust-quote-txt">
    
    <p><b>Name: </b>' . $row["Name"] . '</p>
    <p><b>Email Id: </b>' . $row["Email"] . '</p>
    <p><b>Phone No: </b>' . $row["Phone_no"] .'</p>
    <p><b>Address: </b>' . $row["Address"] . '</p>
    <p><b>City: </b>' . $row["City"] . '</p>
    <p><b>State: </b>' . $row["State"] .'</p>
    <p><b>Post Code: </b>' . $row["Post_code"] . '</p>
    <p><b>Service: </b>' . $row["Service"] . '</p>
    <p><b>Bedroom: </b>' . $row["Bedroom"] .'</p>
    <p><b>Bathroom: </b>' . $row["Bathroom"] . '</p>
    <p><b>Extras: </b>' . $row["Extras"] . '</p>
    <p><b>Customer comments: </b>' . $row["Customer_comments"] .'</p>

  <hr>
  <div class="row">
  <div class="col">
  <p class="admin-cust-quote-txt">' . $row["Date_time"] .'</p>
  </div>
  <div class="col">
  <a href="" onclick="deleteRecord(' . $row["Id"] . ')"><div class="fa fa-remove fa-lg"></div></a>
  </div>
  </div>
  </div>
  
</div>';
}
else{

  echo '<div class="admin-booking">
  <div class="admin-cust-quote-txt">
    
    <p><b>Name: </b>' . $row["Name"] . '</p>
    <p><b>Email Id: </b>' . $row["Email"] . '</p>
    <p><b>Phone No: </b>' . $row["Phone_no"] .'</p>
    <p><b>Address: </b>' . $row["Address"] . '</p>
    <p><b>City: </b>' . $row["City"] . '</p>
    <p><b>State: </b>' . $row["State"] .'</p>
    <p><b>Post Code: </b>' . $row["Post_code"] . '</p>
    <p><b>Service: </b>' . $row["Service"] . '</p>
    <p><b>Bedroom: </b>' . $row["Bedroom"] .'</p>
    <p><b>Bathroom: </b>' . $row["Bathroom"] . '</p>
    <p><b>Extras: </b>' . $row["Extras"] . '</p>
    <p><b>Customer comments: </b>' . $row["Customer_comments"] .'</p>

  <hr>
  <div class="row">
  <div class="col">
  <p class="admin-cust-quote-txt">' . $row["Date_time"] .'</p>
  </div>
  <div class="col">
  <a href="" onclick="deleteRecord(' . $row["Id"] . ')"><div class="fa fa-remove fa-lg"></div></a>
  </div>
  </div>
  </div>
  
</div>';
}
}

?>
</div>
</div>

<hr>
<div class="cpyryt">© 2019 Copyright:GetItFixBondCleaning.com.au</div>


</body>
</html>