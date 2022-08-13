<?php
$your_name = $_POST['your_name'];
$your_tel = $_POST['your_tel'];
$tip_auto = $_POST['tip_auto'];
$adres = $_POST['adres'];

//echo $fio;
//echo "<br>";
//echo $email;
if (mail("perevozki76@mail.ru", "Заявка с сайта", "Имя:".$your_name.". Телефон: ".$your_tel. ". Тип авто: ".$tip_auto. ". Адрес: ".$adres ,"From: example2@mail.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>