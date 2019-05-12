<?php
require 'db_conn.php';

session_start();

$Email = $_POST['postemail'];
$Contact = $_POST['postcontact'];
$Password = $_POST['postpassword'];
$Name = $_POST['postname'];

$sqll = "select * from Registration where Email_id = '$Email'";
	$result = mysqli_query($conn, $sqll);
// echo "result is" . $result;
$num = mysqli_num_rows($result);
if($num == 1){
	echo"The email have you have entered is already registered.";
	return false;
}
else {
$sql = "insert into Registration(Name, Email_id, Phone, Password) values('$Name', '$Email', '$Contact', '$Password')";

$query = mysqli_query($conn, $sql);
if($query){
	echo 'You have been registered.';
	return true;
}
else {
	die('Error: table not found');
}
}
?>