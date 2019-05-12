<?php
session_start();
require 'db_conn.php';

mysqli_select_db($conn, $database);
$Email = $_POST['postemail'];
$Password = $_POST['postpassword'];

$s = "select * from Registration where Email_id = '$Email' && Password = '$Password'";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);
if($num == 1){
	echo "welcome";
	$sql = "select Name from Registration where Email_id = '$Email'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $_SESSION['username'] =  $row["Name"];
    }
} 
}
else {
	echo "Invalid Email or Password";
	// header('location:login.html');
}

?>
