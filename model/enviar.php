<?php
include 'Mailer/src/PHPMailer.php';
include 'Mailer/src/SMTP.php';
include 'Mailer/src/Exception.php';
class enviar {
public function enviar_correo($correo){
    $fromemail  = "Correo";
    $fromname   = $nombre;
    $host       = "smtp.office365.com";
    $port       = "587";
    $SMTPAuth   = "true";
    $SMTPSecure = "STARTTLS";
    $password   = "Contraseña del correo";
    $subject    = "!SUPER PROMOCIONES BERRUN!!!";
    $bodyEmail  = "<br>Aprovecha las super promociones que tenemos para ti  ";

    $mail = new PHPMailer\PHPMailer\PHPMailer();

    $mail->isSMTP();
    $mail->SMTPDebug  = 0;
    $mail->Host       = $host;
    $mail->Port       = $port;
    $mail->SMTPAuth   = $SMTPAuth;
    $mail->SMTPSecure = $SMTPSecure;
    $mail->Username   = $fromemail;
    $mail->Password   = $password;
    $mail->CharSet = 'UTF-8';
    $mail->setfrom($fromemail, $fromname);
    $mail->addAddress($correo);

    //Asunto
    $mail->isHTML(true);
    $mail->Subject = $subject;
    //Cuerpo email
    $mail->Body = $bodyEmail;

    if (!$mail->send()) {
        echo "no se envio";
        die();
    }
}
}
?>
