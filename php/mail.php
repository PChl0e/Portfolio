<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('phpmailer/Exception.php');
require('phpmailer/PHPMailer.php');
require('phpmailer/SMTP.php');

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    try{
        $mail->SMPTDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'chloepi.pro@gmail.com';
        $mail->Password = 'Azerty91??!!';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('chloepi.pro@gmail.com');
        $mail->addAddress('chloepi.pro@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = "Message reçu";
        $mail->Body = '<h3>Name : '.$name .'<br>Email : '.$email .'<br>Message :'. $message.'</h3>';

        $mail->send();
        $alert='<div class="alert-success">
                    <span>Message bien envoyé ! Merci</span>
                </div>';
    }catch (Exception $e){
        $alert = '<div class="alert-error">
                    <span>'.$e->getMessage().'</span>
                </div>';

    }
}

?>