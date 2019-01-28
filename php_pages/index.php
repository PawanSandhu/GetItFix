<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'getitfix_database';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
// if(isset($_POST['name'])){
//     echo 'Variable is set and I can use it!';
// }

$Email = $_POST['postemail'];
$Name = $_POST['postname'];
$Contact = $_POST['postcontact'];
$Subject = $_POST['postsubject'];
$Message = $_POST['postmessage'];
$sql = "insert into request_quote(Email_id, Name, Phone_number, Subject, Message_detail) values('$Email', '$Name', '$Contact', '$Subject', '$Message')";

$query = mysqli_query($conn, $sql);
if($query){
	echo 'Data inserted successfully';
}
else {
	die('Error: table not found.');
}
mysqli_close($conn);
?>