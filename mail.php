<?php

/**
 * This example shows making an SMTP connection with authentication.
 */

//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/SMTP.php";
require "PHPMailer/src/Exception.php";

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

$mail = new PHPMailer();
$mail->CharSet = "UTF-8";
$mail->isHTML(true);

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$request = $_POST["request"];

$email_template = "wp-content/themes/laser/components/templates/mail.html";
$body = file_get_contents($email_template);


$body = str_replace("%name%", $name, $body);
$body = str_replace("%email%", $email, $body);
$body = str_replace("%phone%", $phone, $body);
$body = str_replace("%request%", $request, $body);

//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
//SMTP::DEBUG_OFF = off (for production use)
//SMTP::DEBUG_CLIENT = client messages
//SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
//Set the hostname of the mail server
$mail->Host = 'mailbe01.hoster.by';
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
//Username to use for SMTP authentication
$mail->Username = 'mail@lazerfox.by';
//Password to use for SMTP authentication
$mail->Password = 'H(G7i$qOyFL(rbJ51!';
//Set who the message is to be sent from
$mail->setFrom('mail@lazerfox.by');
$mail->addAddress('vlasiuk1985@gmail.com');
//Set the subject line
$mail->Subject = "[Заявка с формы LAZERFOX]";
$mail->MsgHTML($body);
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {

    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}
