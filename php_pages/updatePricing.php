<?php
require 'db_conn.php';

if(isset($_POST['sprice_id']) && isset($_POST['sbedroom']) && isset($_POST['sbathroom']) && isset($_POST['sbedbath']) && isset($_POST['scarpet'])){

	$query = "update Pricing set Bedroom='" . $_POST['sbedroom'] . "' , Bathroom='" . $_POST['sbathroom'] . "' , Bed_Bath='" . $_POST['sbedbath'] . "' , Carpet='" . $_POST['scarpet'] . "' where price_id='" . $_POST['sprice_id'] . "' ;";
	$status = $conn->query($query);
	
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