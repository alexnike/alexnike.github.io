<?php
//если пользователь нажал кнопку отправить
if (isset($_POST['send'])){

//получаем имя
$name = $_POST['sender_name'];

//получаем email
$email = $_POST['sender_email'];

//получаем текст сообщения
$text = $_POST['message'];

//создаем письмо для отправки
$to = 'spacelab06@yandex.com';
$subject = 'Сообщение с сайта докора Гришина';
$message = 'Имя:'.$name.'\n';
$message.= 'Email:'.$email.'\n';
$message.= 'Сообщение:'.$text.'\n';

if (mail($to, $subject, $message)) echo 'Ваше сообщение успешно отправлено';
else echo 'Сообщение не отправлено';
}
?>