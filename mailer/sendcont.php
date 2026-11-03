<?php

require 'class.phpmailer.php';
require 'class.smtp.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$time = $_POST['time'];
$date = $_POST['date'];

//$files = $_POST['files'];
header("Content-Type: text/html; charset=utf-8");

// Настройки
$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';
$mail->isSMTP();
$mail->Host = '127.0.0.1';
$mail->SMTPAuth = false;
$mail->SMTPAutoTLS = false;
$mail->Port = 25;
$mail->setFrom('info@relevance.kg', 'Relevance');
$mail->addAddress('relevanceconsult@gmail.com');


// Прикрепление файлов
  if (!empty($_FILES['userfile']['tmp_name']) && is_array($_FILES['userfile']['tmp_name'])) for ($ct = 0; $ct < count($_FILES['userfile']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['userfile']['name'][$ct]));
        $filename = $_FILES['userfile']['name'][$ct];
        if (move_uploaded_file($_FILES['userfile']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Failed to move file to ' . $uploadfile;
        }
    }   
                                 
// Письмо
$mail->isHTML(true); 
$mail->Subject = "Заявка на консультацию Relevance"; // Заголовок письма
$mail->Body    = "<table style='width: 100%;'>
<tr style='background-color: #f8f8f8;'>
<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Имя:</b></td><td style='padding: 10px; border: #e9e9e9 1px solid;'>$name</td> 
</tr>
<tr style='background-color: #f8f8f8;'>
<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Номер телефона</b></td><td style='padding: 10px; border: #e9e9e9 1px solid;'>$phone</td> 
</tr>

<tr style='background-color: #f8f8f8;'>
<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Почта</b></td><td style='padding: 10px; border: #e9e9e9 1px solid;'>$email</td> 
</tr>
<tr style='background-color: #f8f8f8;'>
<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Время</b></td><td style='padding: 10px; border: #e9e9e9 1px solid;'>$time</td> 
</tr>

<tr style='background-color: #f8f8f8;'>
<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Дата</b></td><td style='padding: 10px; border: #e9e9e9 1px solid;'>$date</td> 
</tr>

</table>
"; // Текст письма

// Результат
if(!$mail->send()) {
    http_response_code(500);
    error_log('relevance mailer sendcont.php: ' . $mail->ErrorInfo);
    echo 'Письмо не отправлено';
} else { 
    echo '<h1>Спасибо ваша заявка принята!</h1>';
    echo '<p>Мы с Вами скоро свяжемся</p>';
}
?>

<style type="text/css" media="screen">
	h1, p{
		position: absolute;
		width: 100%;
		left: 0;
		top: 50%;
		margin-top: -10px;
		text-align: center;
		color: #128513;
	}
	p{
		margin-top: 40px;
	}
</style>
<script>
    setTimeout(function () {
        window.location.href= 'http://xn----7sbbrokdkrdceh7b.com'; 
    },3000); 
</script>