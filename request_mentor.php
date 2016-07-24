<?php
require 'dev.mail.com/PHPMailer-master/PHPMailerAutoload.php';
include('/dev.sms.com/way2sms-api.php');
sendWay2SMS ( '9920902322' , 'E6475E' , $_GET['contact'] , 'This is to inform you that you have received a request for mentorship.Please log in to view the details.');   

$mail = new PHPMailer;

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'katalystteam3@gmail.com';          // SMTP username
$mail->Password = 'pass@katalyst'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to

$mail->setFrom('katalystteam3@gmail.com', 'MailTest');
$mail->addReplyTo('katalystteam3@gmail.com', 'MailTest');
$mail->addAddress($_GET['email']);   // Add a recipient
$mail->isHTML(true);  // Set email format to HTML
$bodyContent = '<p>Hello,</br>  This is to inform you that you have received a request for mentorship.Please log in to view the details.</p>';

$mail->Subject = 'Request for mentorship';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>