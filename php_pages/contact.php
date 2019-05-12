<?php
require 'db_conn.php';

$Name = $_POST['postusername'];
$Contact = $_POST['postuserphone'];
$sql = "insert into contact_customer(Name, Phone_number) values('$Name', '$Contact')";

$query = mysqli_query($conn, $sql);
if($query){
	echo 'Data inserted successfully';
}
else {
	die('Error: table not found.');
}
?>