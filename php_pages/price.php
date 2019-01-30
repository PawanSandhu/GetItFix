<?php
$con = mysqli_connect('localhost', 'root', '');
$db = mysqli_select_db($con ,'Getitfix_Database');
if($con){
	echo 'Successfully connected to the database. ';
}
else {
	die('Error');
}
if($db) {
	echo 'Successfully found the database.';
}
else {
	die('Error: Database not found.');
}
$sql="SELECT * FROM price";
$records=mysqli_query($con,$sql);

while($price=mysqli_fetch_assoc($records)){
	
	echo"<tr>";

    echo"<td>".$price['Bedrooms']."</td>";

    echo"<td>".$price['Bathrooms']."</td>";

    echo"<td>".$price['Bed+Bath']."</td>";

    echo"<td>".$price['Carpet_price']."</td>";

	echo"</tr>";

}





?>