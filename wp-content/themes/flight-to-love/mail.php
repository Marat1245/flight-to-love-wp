<?php 

require_once(  __DIR__ . '/phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$user_name = $_POST['user_name'];
$phone = $_POST['user_phone'];


//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.yandex.ru';  				// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'marathesadyrov@yandex.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'Poiuytr5356'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('marathesadyrov@yandex.ru'); // от кого будет уходить письмо?
$mail->addAddress( 'maratsadyrov@yandex.ru');     // Кому будет уходить письмо 
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка';
$mail->Body    = "Имя " . $user_name . "<br>" . "Телефон " . $phone;
$mail->AltBody = '';

if(!$mail->send()) {
   require('sorry.html'); 
} else {
   header("Location:" . $_SERVER[SERVER_NAME] . "/спасибо/");
   exit(); 
}




?>