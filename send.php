<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Файлы phpmailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';

// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$tel = $_POST['phone'];

// Формирование самого письма
$title = "Заголовок письма";
$body = "
    <h2>Новое письмо</h2>
    <b>Имя:</b> $name<br>
    <b>Телефон:</b> $tel<br><br>
    ";

// Настройки PHPMailer
$mail = new PHPMailer(true);

try {
    $mail->setFrom('promo@digitalaround.ru', 'Digitalaround.ru'); // Адрес самой почты и имя отправителя
    $mail->addAddress('Ponika39@yandex.ru');  

    // Отправка сообщения
    $mail->isHTML(true);
    $mail->Subject = $title;
    $mail->Body = $body;   

    $mail->send();

    echo 'ok';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}