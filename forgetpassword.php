<?php

// require "header.php";
 
 ?>
 <main>
 	<div class="wrapper-main">
 		<section class="section-default">
 			<h1>Reset your password</h1>
 			<p>An e-mail will be send to you with instructions on how to reset your password.</p>
 			<form action="php_pages/reset-request.php" method="post">
 				<input type="text" id="email" name="email" placeholder="Enter your e-mail address...">
 				<button type="submit" name="reset-request-submit">Receive new password by email</button>
 			</form>
 			<?php
 			    if (isset($_GET["reset"])) {
 			    	if ($_GET["reset"] == "success") {
 			    		echo '<p class="">Check your e-mail!</p>'; 
 			    	}
 			    } 
 			    ?>
 		</section>
 	</div>
 </main> 
