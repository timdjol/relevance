<?php
// Файлы phpmailer
require 'class.phpmailer.php';
require 'class.smtp.php';

$email = $_POST['email'];
//$files = $_POST['files'];

header("Content-Type: text/html; charset=utf-8");
// Настройки
$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';

$mail->isSMTP(); 
$mail->Host = 'smtp.beget.com';  
$mail->SMTPAuth = true;                      
$mail->Username = 'relevance@timdjol.com'; // Ваш логин в Яндексе. Именно логин, без @yandex.ru
$mail->Password = ''; // Ваш пароль
$mail->SMTPSecure = 'ssl';                            
$mail->Port = 465;
$mail->setFrom('relevance@timdjol.com'); // Ваш Email
$mail->addAddress('relevance@timdjol.com'); // Email получателя


// Прикрепление файлов
  for ($ct = 0; $ct < count($_FILES['userfile']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['userfile']['name'][$ct]));
        $filename = $_FILES['userfile']['name'][$ct];
        if (move_uploaded_file($_FILES['userfile']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Failed to move file to ' . $uploadfile;
        }
    }
    
    for ($ct = 0; $ct < count($_FILES['snils']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['snils']['name'][$ct]));
        $filename = $_FILES['snils']['name'][$ct];
        if (move_uploaded_file($_FILES['snils']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Failed to move file to ' . $uploadfile;
        }
    } 
    
    for ($ct = 0; $ct < count($_FILES['income']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['income']['name'][$ct]));
        $filename = $_FILES['income']['name'][$ct];
        if (move_uploaded_file($_FILES['income']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Failed to move file to ' . $uploadfile;
        }
    }   
                                 
// Письмо
$mail->isHTML(true); 
$mail->Subject = "Заявка с сайта Relevance"; // Заголовок письма
$mail->Body    = "<table style='width: 100%;'>
<tr style='background-color: #f8f8f8;'>
<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Эл.почта:</b></td><td style='padding: 10px; border: #e9e9e9 1px solid;'>$email</td> 
</tr>
</table>


"; // Текст письма

// Результат
if(!$mail->send()) {
    echo 'Письмо не отправлено';
    echo 'Ошибка: ' . $mail->ErrorInfo;
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
           window.location.href= 'http://relevance.kg/'; 
        },3000); 
    </script>