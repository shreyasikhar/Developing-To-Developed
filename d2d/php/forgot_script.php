<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
/*use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'code.php';


if(isset($_POST['email']))
{
     $emailTo = $_POST['email'];

     $code = uniqid(true);
     $query = mysqli_query($con,"INSERT INTO forgotpassword(code,email) VALUES ('$code','$emailTo')");
    if(!$query)
     	 exit("Error");


// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    //Host will change accordingly... // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'enlectic@gmail.com';                     // SMTP username
    $mail->Password   = 'Enlectic@2019';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;        //=SSL... // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                   //=465... // TCP port to connect to

    //Recipients
    $mail->setFrom('enlectic@gmail.com', 'Mailer');
    $mail->addAddress($emailTo);     // Add a recipient
  
    $mail->addReplyTo('no-reply@gmail.com', 'No reply');
   
    // Content
  $url =  "http://". $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/changePassword.php?code=$code";
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Your Password Reset Link';
    $mail->Body    = //"This is the HTML message body <b>in bold!</b> $code" 
               " <h1>You Requested a password reset </h1> 
                      click <a href='$url'>this link</a> to do so";
             
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Reset the password link has been send to email';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
  exit();
}*/
?>
<?php
/*// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';
// require 'PHPMailer/src/Exception.php';
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'enlectic@gmail.com';                     // SMTP username
    $mail->Password   = 'Enlectic@2019';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('enlectic@gmail.com', 'Developing To Developed');
    $mail->addAddress('shreyasikhar26@gmail.com', 'Shreyas Ikhar');     // Add a recipient
    $mail->addReplyTo('no-reply@gmail.com', 'No reply');

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
*/?>
<?php

// $email and $message are the data that is being
// posted to this page from our html contact form
$email = "shreyasikhar26@gmail.com" ;
$message = "Message" ;

function __autoload($PHPMailer) {
  require_once $PHPMailer . '.php';
}

//require_once('PHPMailer/src/PHPMailer.php');

require_once('vendor/autoload.php');
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer();
$body='This is body';
$mail->IsSMTP();

$mail->Host = "ssl://smtp.gmail.com"; // specify main and backup server

$mail->SMTPAuth = true; // turn on SMTP authentication

$mail->Username = "enlectic@gmail.com"; // SMTP username
$mail->Password = "Enlectic@2019"; // SMTP password
$mailer->SMTPSecure = 'ssl';
$mailer->Port = 465;//587;
$mail->AddAddress("$email", "$message");
$mail->SetFrom('enlectic@gmail.com','Developing To Developed');
$mail->WordWrap = 50;

$mail->IsHTML(true);

$mail->Subject = "You have received feedback from your website!";

$mail->MsgHTML($body);

if(!$mail->Send())
{
echo "Message could not be sent. <p>";
echo "Mailer Error: " . $mail->ErrorInfo;
exit;
}

echo "Message has been sent";
?>