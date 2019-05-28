<?php

if (isset($_Post["reset-password-submit"])) {

	$selector =$_Post["selector"];
	$validator =$_Post["validator"];
	$password =$_Post["pwd"];
	$passwordRepeat =$_Post["pwd-repeat"];

	if (empty($password) || empty($passwordRepeat)) {
		header("Location: ../create-new-password.php?newpwd=empty");
		exit();
	  } elseif ($password != $passwordRepeat) {
        header("Location: ../create-new-password.php?newpwd=pwdnotsame");
        exit();
	} 

	$currentDate = date("U");

	require 'dbh.inc.php';

	$sql ="SELECT * FROM pwdReset WHERE pwdResetSelector=? AND pwdResetExpires >= ?";
	$stmt =mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
      echo "There was an error!";
      exit();
     } else {
     	mysqli_stmt_bind_param($stmt, "s", $selector);
     	mysqli_stmt_execute($stmt);

     	$result = mysqli_stmt_get_result($stmt);
     	if (!$row = mysqli_fetech_assoc($result)) {
     		echo "You need to re-submit your reset request.";
     		exit();
     	} else {

     		$tokenBin = hex2bin($validator);
     		$tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);
     		if ($tokencheck === false) {
     			echo " You need to re-submit your reset request.";
     			exit();

     		}elseif ($tokenCheck === true) {

     			$tokenEmail = $row['pwdResetEmail'];
     			$sql ="SELECT * FROM users WHERE emailUsers=?;";
     			$stmt = mysqli_stmt_init($conn);
     			if (!mysqli_stmt_prepare($stmt, $sql)) {
                    echo "There was an error!";
                    exit();
                  } else {

                  	mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                  	mysqli_stmt_execute($stmt);
                  	$result = mysqli_stmt_get_result($stmt);
     	            if (!$row = mysqli_fetech_assoc($result)) {
     		        echo "There was an error!";
     		        exit();
     	         } else {

     	         	$sql ="UPDATE users SET pwdusers=? WHERE emailUsers=?";
     	         	$stmt = mysqli_stmt_init($conn);
     			if (!mysqli_stmt_prepare($stmt, $sql)) {
                    echo "There was an error!";
                    exit();
                  } else {
                  	$newPwdHash = password_hash($password, PASSWORD_DEFAULT):

                  	mysqli_stmt_bind_param($stmt, "ss", $newPwdhash, $tokenEmail );
                  	mysqli_stmt_execute($stmt);


                  	 $sql = "DELETE FROM pwdreset WHERE pwdResetEmail=?;";
	$stmt = mysli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
      echo "There was an error!";
      exit();
     } else {
     	mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
     	mysqli_stmt_execute($stmt);
     	header("Location: ../signup.php?newpwd=passwordupdated");
     }
                  }



              }
     		}
     	  }
        }
	  }