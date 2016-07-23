<?php
require 'dev.mail.com/PHPMailer-master/PHPMailerAutoload.php';

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
$mail->addAddress('tanawde78@gmail.com');   // Add a recipient
$mail->isHTML(true);  // Set email format to HTML
$bodyContent = '<p>Hello,</br>  This is to inform you that you have completed your monthly quota of 2 meetings.Thankyou for your cooperation.</p>';

$mail->Subject = 'Completion of monthly quota';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>