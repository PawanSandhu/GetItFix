<?php
// if(isset($_POST['sid']) && isset($_POST['new_sid']) && isset($_POST['sname']) && isset($_POST['sprogram'])){
// 	$servername = 'localhost';
// $username = 'root';
// $password = '';
// $database = 'GetItFix';

// // Create connection
// $con = mysqli_connect($servername, $username, $password, $database);

// // Check connection
// if (!$con) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";

// 	$query = "update student set student_id='" . $_POST['new_sid'] . "' , Name='" . $_POST['sname'] . "' , Program='" . $_POST['sprogram'] . "' where student_id='" . $_POST['sid'] . "' ;";
// 	$status = $con->query($query);
// 	if($status)
// 	echo '<tr id="'. $_POST['new_sid'] .'">' .
// 			 '<td class="ed" id="sid">'. $_POST['new_sid'] . '</td>' .
// 			 '<td class="ed" id="sname">'. $_POST['sname'] . '</td>' .
// 			 '<td class="ed" id="sprogram">'. $_POST['sprogram'] . '</td>' . 
// 			 '<td class="link"><a onclick="setEditable('. $_POST['new_sid'] .')" class="editLink" alt="Edit" name="Edit"><img class="linkImage" src="edit.png" / >Edit</a></td>' .
// 			 '</tr>';	
// }
// else echo 'Nothing found';



// sprice_id:row_id, sbedroom:bedroom, sbathroom:bathroom, sbedbath:bedbath, scarpet:carpet
print_r($_POST);
if(isset($_POST['sprice_id']) && isset($_POST['sbedroom']) && isset($_POST['sbathroom']) && isset($_POST['sbedbath']) && isset($_POST['scarpet'])){
	$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'GetItFix';

// Create connection
$con = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

	$query = "update Pricing set Bedroom='" . $_POST['sbedroom'] . "' , Bathroom='" . $_POST['sbathroom'] . "' , Bed_Bath='" . $_POST['sbedbath'] . "' , Carpet='" . $_POST['scarpet'] . "' where price_id='" . $_POST['sprice_id'] . "' ;";
	$status = $con->query($query);
	echo $query;
	echo $status;
	if($status)
	echo '<tr id="'. $_POST['sprice_id'] .'">' .
			 '<td class="ed" id="sid">'. $_POST['sbedroom'] . '</td>' .
			 '<td class="ed" id="sname">'. $_POST['sbathroom'] . '</td>' .
			 '<td class="ed" id="sprogram">'. $_POST['sbedbath'] . '</td>' . 
			 '<td class="ed" id="sprogram">'. $_POST['scarpet'] . '</td>' . 
			 '<td class="link"><a href="#" onclick="setEditable('. $_POST['sprice_id'] .')" class="editLink" alt="Edit" name="Edit"><img class="linkImage" src="edit.png" / >Edit</a></td>' .
			 '</tr>';	
}
else echo 'Nothing found';

?>