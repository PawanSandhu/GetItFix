<?php

session_start();
// header('location:login.html');
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'GetItFix';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_select_db($conn, 'GetItFix');
// if(isset($_POST['postsubmit'])){
// 	$Name = $_POST['postname'];
// }
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
mysqli_close($conn);
?>