<?php 
require_once('PHPMailer/PHPMailerAutoload.php');


if (isset($_POST["reset-request-submit"]))
{
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "http://getitfix.ictatjcub.com/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);

    $expires = date("U") + 1800;

     require 'db_conn.php';

    $userEmail = $_POST["email"];
    $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      exit();
     } else {
        mysqli_stmt_bind_param($stmt, "s", $userEmail);
        mysqli_stmt_execute($stmt);
     }

     $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      exit();
     } else {
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
        mysqli_stmt_execute($stmt);
     }

     mysqli_stmt_close($stmt);
     mysqli_close($conn);

     $to = $userEmail;

      
     $subject = 'Reset your password for GetItFix Bond Cleaning';

     $message = '<p>We received a password reset request. The link to reset your password is below. If you did not make this request, you can ignore this email</p>';
     $message .='<p>Here is your password reset link: </br>';
     $message .= '<a href="' . $url .'">' . $url . '</a></p>';

     $headers = "From: GetItFix Bond Cleaning <info@getitfixcleaningservices.com.au>\r\n";
     $headers .= "Reply-To: info@getitfixcleaningservices.com.au\r\n";
     $headers .= "Content-type: text/html\r\n";







     $retval = mail($to, $subject, $message, $headers);
         // $retval = mail('pawan688sandhu@gmail.com', 'hello', 'hiii', 'From: mmtuts <usemmtuts@gmail.com>');
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
             $errorMessage = error_get_last()['message'];
             echo "error " . $errorMessage;
         }

     header("Location: ../forgetpassword.php?reset=success");



     
}else {
    header("Location: ../php_pages/index.php");

}

 ?>