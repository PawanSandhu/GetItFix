<?php
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
echo "Connected successfully";


if(isset($_POST['postsubmit'])){
	$Name = $_POST['postname'];
}
$Email = $_POST['postemail'];
$Contact = $_POST['postcontact'];
$Password = $_POST['postpassword'];
$ConfirmPassword= $_POST['postconfirmpassword'];

echo $Name;
echo $Email;
echo $Contact;
echo $Password;
echo $ConfirmPassword;

$result = mysqli_query("select * from Registration where Email_id = '$Email'");
	if(mysqli_num_rows($result) > 0){
		echo "You are already registered";
	}
	else {

$sql = "insert into Registration(Name, Email_id, Phone_number, Password, Confirm_password) values('$Name', '$Email', '$Contact', '$Password', '$ConfirmPassword')";

$query = mysqli_query($conn, $sql);
if($query){
	echo 'Data inserted successfully';
}
else {
	die('Error: table not found');
}
}
}
else{
	echo "here";
}
mysqli_close($conn);
?>