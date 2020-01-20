<?php
$form_name = $_POST['mailname'];
$form_email = $_POST['mailemail'];
$form_subject = $_POST['mailsubject'];
$form_text = $_POST['mailtext'];

header('Content-Type: application/json');
if ($form_name === ''){
  print json_encode(array('message' => 'Name cannot be empty', 'code' => 0));
  exit();
}

if ($form_email === ''){
  print json_encode(array('message' => 'Subject cannot be empty', 'code' => 0));
  exit();
}

if ($form_subject === ''){
    print json_encode(array('message' => 'Subject cannot be empty', 'code' => 0));
    exit();
}

if ($form_text === ''){
    print json_encode(array('message' => 'Subject cannot be empty', 'code' => 0));
    exit();
}
$content="От: $form_name \r\n E-mail: $form_email \r\n Тема: $form_subject \r\n Сообщение: $form_text";
$recipient = "dagfsc@yandex.ru";
$subject = "Сообщение с ГФРД.РФ";

mail($recipient, $subject, $content) or die("Error!");
header("Location: http://гфрд.рф/thanks.html");
exit();
?>