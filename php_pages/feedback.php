<?php
 require 'db_conn.php';

    $Name = $_POST['postname'];
    $Review = $_POST['postreview'];

    $sql = "insert into Testimonials(Name, Review) values('$Name', '$Review')";

$query = mysqli_query($conn, $sql);
if($query){
  echo 'Thanks for your feedback';
}
else {
  die('Error: table not found.');
}


?>