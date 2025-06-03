<?php
// https://github.com/PHPMailer/PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'E:\Users\joaq\Facultad\PHPMailer-master\PHPMailer-master\src\Exception.php';
require 'E:\Users\joaq\Facultad\PHPMailer-master\PHPMailer-master\src\PHPMailer.php';
require 'E:\Users\joaq\Facultad\PHPMailer-master\PHPMailer-master\src\SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'sandbox.smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Port = 2525;
    $mail->Username = '198bdda7f8d483';
    $mail->Password = '2a2774f767fc3f';

    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["asunto"];
    $msg = $_POST["mensaje"];
    $mail->setFrom($email, $name);
    $mail->addAddress('destinatario@hotmail.com', 'Destinatario');
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $msg;

    $mail->send();
    echo 'El correo se envio correctamente';
} catch (Exception $e) {
    echo 'Al intentar enviar el correo ocurrio el siguiente error:' . $mail->ErrorInfo;
}
?>
