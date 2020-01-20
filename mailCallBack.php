<?php
$name = $_POST['name'];
$phone= $_POST['phone'];
header('Content-Type: application/json');
if ($name === ''){
  print json_encode(array('message' => 'Name cannot be empty', 'code' => 0));
  exit();
}

if ($phone === ''){
  print json_encode(array('message' => 'Subject cannot be empty', 'code' => 0));
  exit();
}

$content="От: $name \r\n Номер телефона: $phone";
$recipient = "dagfsc@yandex.ru";
$subject = "Заявка на обратный звонок ГФРД.РФ";

mail($recipient, $subject, $content) or die("Error!");
header("Location: http://гфрд.рф/thanks.html");
exit();
?>