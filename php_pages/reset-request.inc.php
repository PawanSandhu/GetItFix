<?php 
require_once('PHPMailer/PHPMailerAutoload.php');


//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
// require_once('PHPMailer/PHPMailerAutoload.php');

// Instantiation and passing `true` enables exceptions
// $mail = new PHPMailer(true);

//  try {
// //     //Server settings
//      $mail->SMTPDebug = 2;                                       // Enable verbose debug output
//      $mail->isSMTP();                                            // Set mailer to use SMTP
//      $mail->Host       = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
//      $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
//      $mail->Username   = 'pawan688sandhu@gmail.com';                     // SMTP username
//      $mail->Password   = 'wahegurug';                               // SMTP password
//      $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
//      $mail->Port       = 587;                                    // TCP port to connect to

//      //Recipients
//      $mail->setFrom('from@example.com', 'Mailer');
//      $mail->addAddress('randhawalakhpreet@gmail.com', 'Joe User');     // Add a recipient
//      // $mail->addAddress('ellen@example.com');               // Name is optional
//      // $mail->addReplyTo('info@example.com', 'Information');
// //     // $mail->addCC('cc@example.com');
// //     // $mail->addBCC('bcc@example.com');

// //     // Attachments
// //     // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// //     // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

// //     // Content
//      $mail->isHTML(true);                                  // Set email format to HTML
//      $mail->Subject = 'Here is the subject';
//      $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
//      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//      $mail->send();
// //     echo 'Message has been sent';
//  } catch (Exception $e) {
//      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
//  }






$mail = new PHPMailer();
$mail -> SMTPDebug = 3;
// $mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->HOST = 'localhost';
$mail->Port = '25';
$mail->isHTML();
$mail->Username ='pawan688sandhu@gmail.com';
$mail->Password ='wahegurug';
$mail->SetFrom('pawan688sandhu@gmail.com');
$mail->Subject = 'hello';
$mail->Body ='A test email!';
$mail->AddAddress('randhawalakhpreet@gmail.com');

if($mail->Send()){
    echo "success";
}
else {
    echo "fail";
    echo "mail err: " . $mail->ErrorInfo;
}

// print_r($_POST);
// echo $_POST["reset-request-submit"];

// if (isset($_POST["reset-request-submit"]))
// {
// 	$selector = bin2hex(random_bytes(8));
// 	$token = random_bytes(32);

// 	$url = "http://getitfix.ictatjcub.com/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);

// 	$expires = date("U") + 1800;

//     require 'db_conn.php';

// 	$userEmail = $_POST["email"];
//     echo "email is " . $userEmail;
// 	$sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?;";
// 	$stmt = mysqli_stmt_init($conn);
// 	if (!mysqli_stmt_prepare($stmt, $sql)) {
//       echo "There was an error!";
//       exit();
//      } else {
//         echo "in else 1";
//      	mysqli_stmt_bind_param($stmt, "s", $userEmail);
//      	mysqli_stmt_execute($stmt);
//      }

//      $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";
//     $stmt = mysqli_stmt_init($conn);
// 	if (!mysqli_stmt_prepare($stmt, $sql)) {
//       echo "There was an error!";
//       exit();
//      } else {
//         echo " in else 2";
//      	$hashedToken = password_hash($token, PASSWORD_DEFAULT);
//      	mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
//      	mysqli_stmt_execute($stmt);
//      }

//      mysqli_stmt_close($stmt);
//      mysqli_close($conn);

//      $to = $userEmail;

//      echo "email is " . $userEmail;
      
//      $subject = 'Reset your password for mmtuts';

//      $message = '<p>We received a password reset request. The link to reset your password is below. If you did not make this request, you can ignore this email</p>';
//      $message .='<p>Here is your password reset link: </br>';
//      $message .= '<a href="' . $url .'">' . $url . '</a></p>';

//      $headers = "From: mmtuts <usemmtuts@gmail.com>\r\n";
//      $headers .= "Reply-To: usemmtuts@gmail.com\r\n";
//      $headers .= "Content-type: text/html\r\n";

//      echo "subject " . $subject;
//      echo "message " . $message;
//      echo "headers " . $headers;
//      // $retval = mail($to, $subject, $message, $headers);
//          $retval = mail('pawan688sandhu@gmail.com', 'hello', 'hiii', 'From: mmtuts <usemmtuts@gmail.com>');
//          if( $retval == true ) {
//             echo "Message sent successfully...";
//          }else {
//             echo "Message could not be sent...";
//              $errorMessage = error_get_last()['message'];
//              echo "ghhhh" . $errorMessage;
//          }

//      // header("Location: ../forgetpassword.php?reset=success");



	 
// }else {
//     echo "in else 4";
// 	// header("Location: ../php_pages/index.php");

// }

 ?>