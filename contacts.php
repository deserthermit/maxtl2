<?php
if (array_key_exists('messageFF', $_POST)) {
    $to = 'lend@maxtl.ru';
    $message = "Имя: ".$_POST['nameFF']."\nТелефон: ".$_POST['contactFF']."\nIP: ".$_SERVER['REMOTE_ADDR']."\nemail: ".$_POST['messageFF']."\nТип: ".$_POST['typeFF']."\nСкидка: ".$_POST['discountFF']."\nКоличество: ".$_POST['value'];
    $subject = '2_ '.$_POST['nameFF']."\n_ ".$_POST['contactFF']."\n_ ".$_POST['messageFF'];;
    $subject = "=?utf-8?b?". base64_encode($subject) ."?=";$headers = 'Content-type: text/plain; charset="utf-8"';
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";
    mail($to, $subject, $message, $headers);

    $str = $_POST['discountFF'];

    $numbers = preg_replace( "/\D/", '' , $str );
}

?>

<!DOCTYPE html>
<html>
<head lang="ru">
    <meta charset="UTF-8">
    <title>Проволока для MAX</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <style>
        .coupon {
            margin: auto;
            position: relative;
            width: 858px;
            height: 596px;
            overflow: hidden;
        }
        #kolvo, #name, #phone, #email, #date, .button {
            position: absolute;
            font-family: "Open Sans", sans-serif;
            font-weight: bold;
            }
        #kolvo {
            bottom: 200px;
            left: 585px;
            font-size: 24px;
        }
        #name {
            bottom: 142px;
            left: 580px;
            font-size: 16px;
        }
        #phone {
            bottom: 88px;
            left: 580px;
            font-size: 16px;
        }
        #email {
            bottom: 36px;
            left: 578px;
            font-size: 14px;
        }
        #date {
            bottom: 12px;
            left: 172px;
        }
        .button a.print {
            display: inline-block;
            /*width: 130px;*/
            height: 26px;
            line-height: 20px;
            padding-left: 5px;
            padding-right: 5px;
            padding-top: 6px;
            color: #000000;
            text-decoration: none;
            font-size: 11px;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
            border: 1px solid #000;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="coupon">
        <img src="images/coupons/coupon_<?php
            if ($numbers == 350) {echo '1';}
            else if ($numbers == 1000) {echo '2';}
            else if ($numbers == 3000) {echo '3';}
            else if ($numbers == 5000) {echo '4';}
            else if ($numbers == 7000) {echo '5';}
            else if ($numbers == 10000) {echo '7';}
            else {echo '8';}
        ?>.jpg" alt="">
        <div id="kolvo"><?php echo $_POST['value']; ?></div>
        <div id="name"><?php echo $_POST['nameFF']; ?></div>
        <div id="phone"><?php echo $_POST['contactFF']; ?></div>
        <div id="email"><?php echo $_POST['messageFF']; ?></div>
        <div id="date"><?php echo date('d m Y'); ?></div>
    </div>

    <div class="button">
<a href='javascript:window.print(); void 0;' class="print"> 
    <img align="left" border="0" height="22" src="http://1.bp.blogspot.com/_ebKrCj8TLPk/TVLslRbfqtI/AAAAAAAABb0/wHKJcbR3sls/s1600/pechat.png" width="22">
    Сохранить и распечатать купон</a>
    </div>
</body>
</html>
