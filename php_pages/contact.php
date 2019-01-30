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
mysqli_close($conn);
?>