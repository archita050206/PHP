<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\src\Exception;
require 'PHPMailer/PHPMailer/src/Exception.php';
require 'PHPMailer/PHPMailer/src/PHPMailer.php';
require 'PHPMailer/PHPMailer/src/SMTP.php';


    $mail=new PHPMailer(true);
    try{
    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth=true;
    $mail->Username='darchita06@gmail.com';
    $mail->Password='cdgd sbii xmft fkif';
    $mail->SMTPSecure='ssl';
    $mail->Port= 465;
    $mail->setFrom('darchita06@gmail.com');

    $mail->addAddress("darchita0205@gmail.com");
    $mail->isHTML(true);
    $mail->Subject="Helloo";
    $mail->Body= "This is my test email";
    $mail->send();
    $mail->SMTPDebug = 2; // Set to 0 for production, 2 for debugging
    $mail->Debugoutput = 'html';

    $mail->send();
    echo "Message sent successfully!";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>