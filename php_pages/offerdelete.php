<?php
 require 'db_conn.php';

  
   $sql = "delete from discount where id=1;";
    $query = mysqli_query($conn, $sql);
    if($query){
  echo 'Offer deleted';
}
else {
  echo "<script>alert('in else');</script>";
  die('Error: table not found.');
}

?>