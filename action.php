<?php
//���� ������������ ����� ������ ���������
if (isset($_POST['send'])){

//�������� ���
$name = $_POST['sender_name'];

//�������� email
$email = $_POST['sender_email'];

//�������� ����� ���������
$text = $_POST['message'];

//������� ������ ��� ��������
$to = 'spacelab06@yandex.com';
$subject = '��������� � ����� ������ �������';
$message = '���:'.$name.'\n';
$message.= 'Email:'.$email.'\n';
$message.= '���������:'.$text.'\n';

if (mail($to, $subject, $message)) echo '���� ��������� ������� ����������';
else echo '��������� �� ����������';
}
?>