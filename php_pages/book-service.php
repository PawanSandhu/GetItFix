<?php
require 'db_conn.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$postcode = $_POST['postcode'];
$services = $_POST['services'];
$bedroom = $_POST['bedroom'];
$bathroom = $_POST['bathroom'];
$extras = $_POST['extras'];
$customerComments = $_POST['customerComments'];
$Date_time = date("Y/m/d") . "  " . date("h:i:sa");
$sql = "insert into BookService(Name, Email, Phone_no, Address, City, State, Post_code, Service, Bedroom, Bathroom, Extras, Customer_comments, Date_time) values('$name', '$email', '$phone', '$address', '$city', '$state', '$postcode', '$services', '$bedroom', '$bathroom', '$extras', '$customerComments', '$Date_time')";

$query = mysqli_query($conn, $sql);
if($query){
	echo 'Your query has been sent.';
}
else {
	die('Error: table not found.');
}
?>

