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

        window.location.href="pricing.php";

      } 

      function setEditable(row_id){
  alert("in set editable" + JSON.stringify(row_id));
  var tr = document.getElementById(row_id);
  var tr_elements = $("#" + row_id).find(".editable");
  
  for( var i = 0; i<tr_elements.length; i++){ // set the row td's Editible
    tr_elements[i].contentEditable = "true";
    tr_elements[i].style.color="red";
  } 
  var updateLinkHTML = "<a href='#' onclick='editStudent(" + row_id + ")' class='updateLink' ><img class='linkImage' src='update.png' />Update</a>";
        
  $("#" + row_id).find(".editLink").fadeOut('slow' ,function(){$(this).replaceWith(updateLinkHTML).fadeIn()});
  alert('Row is now editibale edit it and click Update to Save');
}

function editStudent(row_id){
  var bedroom = $("#" + row_id).find(".editable")[0].textContent;
  var bathroom = $("#" + row_id).find(".editable")[1].textContent;
  var bedbath = $("#" + row_id).find(".editable")[2].textContent;
  var carpet = $("#" + row_id).find(".editable")[3].textContent;
  
  $.post("editStudent.php" , {sprice_id:row_id, sbedroom:bedroom, sbathroom:bathroom, sbedbath:bedbath, scarpet:carpet} , function(data){
    alert(data);
    $("#result").html(data);
    $("#" + row_id).fadeOut('slow' , function(){$(this).replaceWith(data).fadeIn('slow');});
  } );
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



    <?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'GetItFix';

// Create connection
$con = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


$result = $con->query('SELECT * FROM Pricing;');
  echo '<div class="pricing-table">
  <div class="container">
  <table>
     <tr>
     <th>Bedrooms</th>
     <th>Bathrooms</th>
     <th>Bed+Bath Price($)</th>
     <th>Carpet Steam Cleaning Price($)</th>
     <th>Edit</th>
     </tr>';
    while($row = $result->fetch_assoc())
    echo '<tr id="'. $row['price_id'] .'">' .
      '<td class="editable" id="sid">'. $row['Bedroom'] . '</td>' .
       '<td class="editable" id="sid">'. $row['Bathroom'] . '</td>' .
       '<td class="editable" id="sname">'. $row['Bed_Bath'] . '</td>' .
       '<td class="editable" id="sprogram">'. $row['Carpet'] . '</td>' . 
       '<td class="link"><a href="#" onclick="setEditable('. $row['price_id'] .')" class="editLink" alt="Edit" name="Edit"><img class="linkImage" src="edit.png" / >Edit</a></td>' .
       '</tr>';
       echo '</table>
   </div>
   </div>';
?>

<hr>
<div class="cpyryt">© 2019 Copyright:GetItFixBondCleaning.com.au</div>

</body>
</html>

