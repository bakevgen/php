<?php
$email = "e_mail@mail.ru";
$cherta = 0;
$domen = array('ru', 'com', 'net', 'by');
    
if (preg_match("/^[\w]{8,}@[a-z]{1,}\.[a-z]{2,}$/i", $email)) { 
    if (in_array(explode('.', $email)[1], $domen)) {
        for ($i = 0; $i < strlen($email); $i++) {
            if ($email[$i] == "_") {
                $cherta++;
            } elseif ($cherta >= 2) {
                echo("Ошибка");
                return 0;
            }
        }
        echo("ok");
        return 1;
    } else {
        echo("Ошибка");
        return 0;
    }
} else {
    echo("Ошибка");
    return 0;
}
?>