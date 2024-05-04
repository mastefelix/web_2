<?php
$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];

$name = trim(urldecode(htmlspecialchars($name)));
$email = trim(urldecode(htmlspecialchars($email)));
$msg = trim(urldecode(htmlspecialchars($msg)));

if(mail("alexandr.kurganskii!yandex.ru",
    "Новый запрос",
    "<h1>На сайте оставлена заявка</h1>
    <br>от:<b>".$name."</b>
    <br>email:<b>".$email."</b>
    <br>от:<b>".$name."</b>
    <br>комментарий:".$msg."
    <br>Поздравляю с новой заявкой",
    "From: 1c-webdevelopment.ru\r\n". "Content-type: text/html\r\n"))

{
    echo "{'Status': 'ok'}";
}else{
    echo "{'status': 'error'}";
}



?>
