<?php
 require 'db_conn.php';

    $discount = $_POST['postdiscount'];
    $amount = $_POST['postamount'];

    $result = $conn->query('SELECT * FROM discount;');
   $num = mysqli_num_rows($result);
   if($num >0){
   	$sql = "delete from discount where id=1;";
   	$query = mysqli_query($conn, $sql);
   	if($query){
}
else {
  die('Error: table not found.');
}
   }
   $sql = "insert into discount(id,discount_details, amount) values(1,'$discount', '$amount')"; 

$query = mysqli_query($conn, $sql);
if($query){
  echo 'Thanks';
}
?>