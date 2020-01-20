<?php
$nameorg = $_POST['nameorg'];
$inn = $_POST['inn'];
$nameperson = $_POST['nameperson'];
$phoneperson = $_POST['phoneperson'];
$emailperson = $_POST['emailperson'];
$summakredit = $_POST['summakredit'];
$summapor = $_POST['summapor'];
$timekredit = $_POST['timekredit'];
$target = $_POST['target'];
$comments = $_POST['comments'];

header('Content-Type: application/json');
if ($nameorg === ''){
  print json_encode(array('message' => 'Name cannot be empty', 'code' => 0));
  exit();
}

if ($inn === ''){
  print json_encode(array('message' => 'Subject cannot be empty', 'code' => 0));
  exit();
}

if ($nameperson === ''){
    print json_encode(array('message' => 'Subject cannot be empty', 'code' => 0));
    exit();
}

if ($phoneperson === ''){
    print json_encode(array('message' => 'Subject cannot be empty', 'code' => 0));
    exit();
}

if ($emailperson === ''){
    print json_encode(array('message' => 'Subject cannot be empty', 'code' => 0));
    exit();
}

if ($summakredit === ''){
    print json_encode(array('message' => 'Subject cannot be empty', 'code' => 0));
    exit();
}

if ($summapor === ''){
    print json_encode(array('message' => 'Subject cannot be empty', 'code' => 0));
    exit();
}

if ($timekredit === ''){
    print json_encode(array('message' => 'Subject cannot be empty', 'code' => 0));
    exit();
}

if ($target === ''){
    print json_encode(array('message' => 'Subject cannot be empty', 'code' => 0));
    exit();
}
if ($comments === ''){
    print json_encode(array('message' => 'Subject cannot be empty', 'code' => 0));
    exit();
}

$content="От: $nameorg \r\n ИНН: $inn \r\n Контактное лицо: $nameperson \r\n Телефон: $phoneperson \r\n E-mail: $emailperson \r\n Сумма кредита: $summakredit \r\n Сумма поручительства: $summapor \r\n Срок кредитования: $timekredit \r\n Цель кредитования: $target \r\n Комментарий: $comments";
$recipient = "dagfsc@yandex.ru";
$subject = "Заявка на поручительство ГФРД.РФ";

mail($recipient, $subject, $content) or die("Error!");
header("Location: http://гфрд.рф/thanks.html");
exit();
?>