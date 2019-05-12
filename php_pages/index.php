<?php
require 'db_conn.php';

$Email = $_POST['postemail'];
$Name = $_POST['postname'];
$Contact = $_POST['postcontact'];
$Subject = $_POST['postsubject'];
$Message = $_POST['postmessage'];
$sql = "insert into request_quote(Email_id, Name, Phone_number, Subject, Message_detail) values('$Email', '$Name', '$Contact', '$Subject', '$Message')";

$query = mysqli_query($conn, $sql);
if($query){
	echo 'Your query has been sent.';
}
else {
	die('Error: table not found.');
}
?>