<?php 

$name = $_POST['Cname'];
$phone = $_POST['Ctel'];
$square = $_POST['square'];
$wplaces = $_POST['wplaces'];
$printers = $_POST['printers'];
$netcab = $_POST['netcab'];
$telcab = $_POST['telcab'];



require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

// $mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'techmailer@bk.ru';                 // Наш логин
$mail->Password = 'mailerPASSWORD';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('techmailer@bk.ru', 'ESO-link-test-form');   // От кого письмо 
$mail->addAddress('romanov.knk@gmail.com');     // Add a recipient
$mail->addAddress('eremin_art@mail.ru');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'YEEEEHHHHAAAAAAAA!!!';
$mail->Body    = '
		Клиент ждёт!!! <br> 
	Имя: ' . $name . ' <br>
	Телефон: ' . $phone . '<br>
	Площадь: ' . $square . '<br>
	Рабочих мест: ' . $wplaces . '<br>
	МФУ/принтеры: ' . $printers . '<br>
	Интернет на местах: ' . $netcab . '<br>
	Телефон на местах: ' . $telcab .  '';

if(!$mail->send()) {
    return false;
} else {
    return true;
}

?>