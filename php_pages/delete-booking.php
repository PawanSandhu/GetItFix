<?php
require 'db_conn.php';
// echo "ih here";
$id = $_POST['id'];
$sql = "delete from BookService where Id='$id';";

$query = mysqli_query($conn, $sql);
if($query){
	// echo 'Contact deleted successfully';
}
else {
	// die('Error: Not found.');
}
?>