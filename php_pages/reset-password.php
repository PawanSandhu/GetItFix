<?php

  $selector =$_REQUEST["selector"];
  $validator =$_REQUEST["validator"];
  $pswrd =$_REQUEST["pwd"];
  $passwordRepeat =$_REQUEST["pwd-repeat"];


   


  if (empty($pswrd) || empty($passwordRepeat)) {
     header("Location: ../create-new-password.php?newpwd=empty");
    exit();
    } elseif ($pswrd != $passwordRepeat) {
        header("Location: ../create-new-password.php?newpwd=pwdnotsame");
        exit();
  } 

  $currentDate = date("U");

  require 'db_conn.php';

$sqll = "SELECT * FROM pwdReset WHERE pwdResetSelector='$selector'";
$result = mysqli_query($conn, $sqll);
$num = mysqli_num_rows($result);
if($num == 1){
  while($row = $result->fetch_assoc()) {
    echo "email is: " . $row['pwdResetEmail'];
    $email =  $row['pwdResetEmail'];
  }
  $sql ="UPDATE Registration SET Password='$pswrd' WHERE Email_id='$email'";
  $query = mysqli_query($conn, $sql);
if($query){
  header("Location: ../create-new-password.php?newpwd=passwordupdated");
  return true;
}
else {
  die('Error: table not found');
}
}
else {
  header("Location: ../create-new-password.php?newpwd=timeout");
}

?>

  // $sql ="SELECT * FROM pwdReset WHERE pwdResetSelector=? AND pwdResetExpires >= ?";
  // $stmt =mysqli_stmt_init($conn);
  // if (!mysqli_stmt_prepare($stmt, $sql)) {
 //      echo "There was an error!";
 //      exit();
 //     } else {
 //       mysqli_stmt_bind_param($stmt, "s", $selector);
 //       mysqli_stmt_execute($stmt);

 //       $result = mysqli_stmt_get_result($stmt);
 //      echo "res " . $result;
 //      while ($row = mysqli_fetch_array($result, MYSQLI_NUM))
 //        {
 //            foreach ($row as $r)
 //            {
 //                echo "rrr " . $r;
 //            }
 //            print "\n";
 //        }
 //      $row = mysqli_fetch_assoc($result);
 //      echo "row " . $row;

 //       if (!$row = mysqli_fetch_assoc($result)) {
 //        echo "fetch not";
 //         echo "You need to re-submit your reset request.";
 //         exit();
 //       } else {

 //         $tokenBin = hex2bin($validator);
 //         $tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);
 //         if ($tokencheck === false) {
 //          echo "fetch yes";
 //           echo " You need to re-submit your reset request.";
 //           exit();

 //         }elseif ($tokenCheck === true) {

 //           $tokenEmail = $row['pwdResetEmail'];
 //           $sql ="SELECT * FROM Registration WHERE Email_id=?;";
 //           $stmt = mysqli_stmt_init($conn);
 //           if (!mysqli_stmt_prepare($stmt, $sql)) {
 //                    echo "There was an error!";
 //                    exit();
 //                  } else {

 //                   mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
 //                   mysqli_stmt_execute($stmt);
 //                   $result = mysqli_stmt_get_result($stmt);
 //                   if (!$row = mysqli_fetech_assoc($result)) {
 //                 echo "There was an error!";
 //                 exit();
 //                } else {

 //                 $sql ="UPDATE Registration SET Password=? WHERE Email_id=?";
 //                 $stmt = mysqli_stmt_init($conn);
 //           if (!mysqli_stmt_prepare($stmt, $sql)) {
 //                    echo "There was an error!";
 //                    exit();
 //                  } else {
 //                   $newPwdHash = password_hash($pswrd, PASSWORD_DEFAULT);

 //                   mysqli_stmt_bind_param($stmt, "ss", $newPwdhash, $tokenEmail );
 //                   mysqli_stmt_execute($stmt);


 //                    $sql = "DELETE FROM pwdreset WHERE pwdResetEmail=?;";
  // $stmt = mysli_stmt_init($conn);
  // if (!mysqli_stmt_prepare($stmt, $sql)) {
 //      echo "There was an error!";
 //      exit();
 //     } else {
 //       mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
 //       mysqli_stmt_execute($stmt);
 //       header("Location: ../signup.php?newpwd=passwordupdated");
 //     }
 //                  }



 //              }
 //         }
 //         }
 //        }
  //   }
  // }