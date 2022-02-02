<?php

use PHPMailer\PHPMailer\PHPMailer;

session_start();
if (!isset($_SESSION['sendEmail'])) {
    try {
        $message = $_POST['message'];
        $emailUser = $_POST['userEmail'];
        $name = $_POST['nama'];

        require_once 'PHPMailer/src/PHPMailer.php';
        require_once 'PHPMailer/src/SMTP.php';
        require_once 'PHPMailer/src/Exception.php';

        // require 'vendor/autoload.php';

        $subject = 'Response from website';
        $mail = new PHPMailer();

        //smtp setting
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'yufriluttu567@gmail.com';
        $mail->Password = '$password(Mailer);';
        $mail->Port = 465;
        $mail->SMTPSecure = 'ssl';

        //email setting
        $mail->isHTML(true);
        $mail->setFrom($emailUser, $name);
        $mail->addAddress('yufriluttu567@gmail.com');
        $mail->Subject = ("$emailUser ($subject)");
        $mail->Body = $message;

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}