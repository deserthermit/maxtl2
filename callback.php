<?php
if (array_key_exists('messageFF', $_POST)) {

    if (isset($_POST['client_comment'])) {$clcom = $_POST['client_comment'];}

    $clcom = sanitizeString($clcom);
    $to = 'lend@maxtl.ru';
    $subject = 'Заполнена контактная форма с '.$_SERVER['HTTP_REFERER'];
    $subject = "=?utf-8?b?". base64_encode($subject) ."?=";
    $message = "Имя: ".$_POST['nameFF']."\nEmail/Телефон: ".$_POST['contactFF']."\nIP: ".$_SERVER['REMOTE_ADDR']."\nСообщение: ".$_POST['messageFF'].$clcom;
    $headers = 'Content-type: text/plain; charset="utf-8"';
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";
    mail($to, $subject, $message, $headers);
    echo $_POST['nameFF'];
    
}

function sanitizeString($var)
{
$var = stripslashes($var);
$var = htmlentities($var);
$var = strip_tags($var);
return $var;
}






?>
