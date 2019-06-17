<?php

$sendto   = "info@tatyana-panyushkina.com"; // почта, на которую будет приходить письмо
$username = $_POST['name'];   // сохраняем в переменную данные полученные из поля c именем*/
$usertel = $_POST['telephone']; // сохраняем в переменную данные полученные из поля c телефонным номером
$time = $_POST['time']; // сохраняем в переменную данные полученные из выпадающего списка
$q = $_POST['q']; // сохраняем в переменную данные полученные из выпадающего списка
$tema = $_POST['tema']; // сохраняем в переменную данные полученные из выпадающего списка

// Формирование заголовка письма 
$subject  = "Обратный звонок https://lumos22.info/tp_9dvortsov-konsultacii";
$from = '=?UTF-8?B?' . base64_encode('Лендинг https://lumos22.info/tp_9dvortsov-konsultacii');
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Лендинг https://lumos22.info/tp_9dvortsov-konsultacii</h2>\r\n";
$msg .= "<p><strong>Имя:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$usertel."</p>\r\n";
$msg .= "<p><strong>В какое время удобнее принять звонок:</strong> ".$time."</p>\r\n";
$msg .= "<p><strong>Тема вашего вопроса:</strong> ".$tema."</p>\r\n";
$msg .= "</body></html>";

// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
          echo "<center><h1>СПАСИБО! ВАША ЗАЯВКА ПРИНЯТА!</h1>
          <h3>В ближайшее время с вами свяжется менеджер.<br> Пожалуйста, включите ваш контактный телефон.</h3></center>";
      echo "<center><a href='https://lumos22.info/tp_9dvortsov-konsultacii'>Вернуться на сайт</a></center>";
} else {
           echo "<center><h1>Ой!Что-то пошло не так.<br>Попробуйте вернуться на сайт и повторить отправку формы.</h1></center>";
     echo "<center><a href='https://lumos22.info/tp_9dvortsov-konsultacii'>Вернуться на сайт</a></center>";
}

?>