<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetItFix: Pricing</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/responsive3.css" media="screen and (max-width: 1150px)" />
    <link rel="stylesheet" href="css/responsive2.css" media="screen and (max-width: 1024px)" />
    <link rel="stylesheet" href="css/responsive1.css" media="screen and (max-width: 768px)" />
    <link rel="stylesheet" href="css/responsive.css" media="screen and (max-width: 650px)" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="libs/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js"></script>
    
</head>

<body> 
<div class="home-header">
            <div class="home-top-div">
              <div class="container">
              <div class="row">
                <div class="col-special text-center">
              <img class="home-page-logo float-md-left" src="images/logo_getitfix.png"> 
            </div>
            <div class="col-special text-center">
            <div class="home-top-info float-md-right">
                <div class="fa fa-phone">
                  <span style="margin-left: 5px;">0424 500 074</span>
            </div><br>
            <div class="fa fa-envelope">
            <span style="margin-left: 5px;">info@getitfixcleaningservices.com.au</span></div>     
          </div>
        </div>
        </div>
      </div>
    </div>

    <div class="container y">
  <nav class="navbar navbar-expand-md navbar-light container">
 <!--  <a class="navbar-brand" href="#"><img src="images/logo_getitfix.png" style="height: 100px; width: 100px;"> </a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul id="menu-main-nav" class="navbar-nav nav-fill w-100">
     <li id="menu-item-42" class="nav-item menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-6 current_page_item menu-item-42"><a href="index.html" class="nav-link">HOME</a></li>
     <li id="menu-item-963" class="nav-item menu-item menu-item-type-post_type menu-item-object-page menu-item-963 dropdown"><a href="#" class="nav-link home-item-space dropdown-toggle" data-toggle="dropdown" data_target="dropdown_target">SERVICES
        <span class="caret"></span></a>
        <div class="dropdown-menu" aria-labelledby="dropdown_target">
          <a href="bond.html" class="dropdown-item">End of Lease Cleaning</a>
          <div class="dropdown-divider"></div>
          <a href="carpet.html" class="dropdown-item">End of Lease Carpet Steam Cleaning</a>
          <div class="dropdown-divider"></div>
          <a href="pest.html" class="dropdown-item">End of Lease Pest Control</a>
          <div class="dropdown-divider"></div>
          <a href="pressure_wash.html" class="dropdown-item">End of Lease Pressure Wash</a>
          <div class="dropdown-divider"></div>
          <a href="lawn.html" class="dropdown-item">End of Lease Lawn Mowing</a>
          <div class="dropdown-divider"></div>
          <a href="checklist.html" class="dropdown-item">Cleaning Checklist</a>
        </div>
      </li>

      <li id="menu-item-40" class="nav-item menu-item menu-item-type-post_type menu-item-object-page menu-item-40"><a href="pricing.php" class="nav-link">PRICING</a></li>

      <li id="menu-item-963" class="nav-item menu-item menu-item-type-post_type menu-item-object-page menu-item-963 dropdown"><a href="#" class="nav-link home-item-space dropdown-toggle" data-toggle="dropdown" data_target="dropdown_target">ABOUT US
        <span class="caret"></span></a>
        <div class="dropdown-menu" aria-labelledby="dropdown_target">
          <a href="about_us.html" class="dropdown-item">Our Story</a>
          <div class="dropdown-divider"></div>
          <a href="contact.html" class="dropdown-item">Contact Us</a>
        </div>
      </li>

       <li id="menu-item-40" class="nav-item menu-item menu-item-type-post_type menu-item-object-page menu-item-40"><a href="blog.html" class="nav-link">BLOG</a></li>

     <li id="menu-item-40" class="nav-item menu-item menu-item-type-post_type menu-item-object-page menu-item-40 lifts"><a href="login.html" class="nav-link"><button id="login-btn" class="login-btn" type="submit">LOGIN</button></a></li>

     <li id="menu-item-40" class="nav-item menu-item menu-item-type-post_type menu-item-object-page menu-item-40 lifts"><a href="index.html" class="nav-link"><button id="request-button" class="request-button" type="submit">Request a Free Quote</button></a></li>
</ul>
</div>
</nav>
</div>
</div>

    <div class="pricing-top-div text-center">
        <h1>Pricing</h1>
    </div>

            <div class="pricing-color">
                <div class="container">
                <h3>Our prices can be variable according to the size and condition of the Houses. <br>Each additional room starts from $49.
                </h3>
              </div>
            </div>




 

 <?php
require 'php_pages/db_conn.php';

   $result = $conn->query('SELECT * FROM Pricing;');
  echo '<div class="pricing-table">
  <div class="container">
  <table>
     <tr>
     <th>Bedrooms</th>
     <th>Bathrooms</th>
     <th>Bed+Bath Price($)</th>
     <th>Carpet Steam Cleaning Price($)</th>
     </tr>';
    while($row = $result->fetch_assoc())
    echo '<tr id="'. $row['price_id'] .'">' .
      '<td class="editable" id="sid">'. $row['Bedroom'] . '</td>' .
       '<td class="editable" id="sid">'. $row['Bathroom'] . '</td>' .
       '<td class="editable" id="sname">'. $row['Bed_Bath'] . '</td>' .
       '<td class="editable" id="sprogram">'. $row['Carpet'] . '</td>' . 
       '</tr>';
       echo '</table>
   </div>
   </div>';

  
?>
      

<div class="pricing-color">
                <div class="container">
                <h3>Pest Control prices starts from $49.00 with bond cleaning package.
                </h3>
              </div>
            </div>


<!-- Footer -->
 <footer class="page-footer font-small stylish-color-dark pt-4">
    <div class="container text-center text-md-left">

      <div class="row">

        <div class="col-md-4 mx-auto">

          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">GetItFix Bond Cleaning</h5>
          <ul class="list-unstyled">
            <li>
          <a href="about_us.html">We are a bond cleaning company that provides quality cleaning services and all general pest treatments for your home.</a></li></ul>

        </div>

        <hr class="clearfix w-100 d-md-none">

        <div class="col-md-4 mx-auto">

          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Services</h5>

          <ul class="list-unstyled">
            <li>
              <a href="bond.html">End of Lease Cleaning</a>
            </li>
            <li>
              <a href="carpet.html">End of Lease Carpet Steam Cleaning</a>
            </li>
            <li>
              <a href="pest.html">End of Lease Pest control</a>
            </li>
            <li>
              <a href="pest.html">End of Lease Pressure Wash</a>
            </li>
            <li>
              <a href="pest.html">End of Lease Lawn Mowing</a>
            </li>
          </ul>

        </div>
      <div class="col-md-4 mx-auto">
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Pricing</h5>
          <ul class="list-unstyled">
            <li>
          <a href="pricing.php">Bond cleaning - starts from $229
            <br>
          Carpet cleaning - starts from $49
          <br>
          Pest control - starts from $49
          <br>
          Pressure wash - starts from $35
          <br>
          Lawn mowing - starts from $50
        </a></li></ul>

        </div>
        
      </div>

    </div>

    <hr>

    <ul class="list-unstyled list-inline text-center py-2">
      
      <li class="list-inline-item">
        <a href="index.html" class="btn btn-footer btn-lg btn-rounded">Request a free quote</a>
      </li>
    </ul>
    
    <div class="footer-copyright text-center py-3">© 2019 Copyright:GetItFixBondCleaning.com.au
    </div>

</footer> 
<!-- Footer -->

 </body>
  </html>
