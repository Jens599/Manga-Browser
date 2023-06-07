<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '/PHPMailer-6.8.0/src/Exception.php';

$mail = new PHPMailer(true);

$to = 'workjenss@gmail.com';
$subject = 'Test';
$message = 'Test to send mail by php';

$sendmail = mail($to, $subject, $message);

if ($sendmail) {
    echo 'success';
} else {
    echo 'fail';
}
