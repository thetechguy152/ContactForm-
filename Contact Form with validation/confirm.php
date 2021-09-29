<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

    require './src/Exception.php';
    require './src/PHPMailer.php';
    require './src/SMTP.php';

  

$mail = new PHPMailer(true);

//Enable SMTP debugging.
$mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "your gmail email or server email ";                 
$mail->Password = "your gmail password or server password";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to
$mail->Port = 587;                                   
$mail->setFrom($_POST['email'],  $_POST['name']);
$mail->addAddress("hectorgoodman1@gmail.com");
$mail->isHTML(true);


// Message header / subject
$mail->Subject = ("Contact Form Submission");

 //Build a simple message body
        $mail->Body = <<<EOT
Email: {$_POST['email']}<br>
Name: {$_POST['name']}<br>
Phone:{$_POST['phone']}<br>
Message: {$_POST['message']}
EOT;

  






try {
    $mail->send();
    echo "Message has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
