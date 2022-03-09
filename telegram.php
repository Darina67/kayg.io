<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$text = $_POST['user_text'];
$token = "5064066057:AAF4nK9_Kw30Kk3cqBj7ZcoqnZZ-x6MY-DU";
$chat_id = "-709796935";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Сообщение' => $text
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
    echo "<script type=\"text/javascript\"> function show_alert() { alert(\"Заявка отправлена!\"); } </script>";
    header('Location: /index.html');
} else {
  echo "Error";
}
?>