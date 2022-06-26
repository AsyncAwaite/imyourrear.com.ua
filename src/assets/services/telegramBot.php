<?php

$token = "tg";

$chat_id = "-1001683760236";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $input = json_decode(file_get_contents("php://input"), true);
  if (!empty($input['name']) && !empty($input['phone'])) {
    if (isset($input['name'])) {
      if (!empty($input['name'])) {
        $name = strip_tags($input['name']);
        $nameFieldset = "Ім'я: ";
      }
    }
    if (isset($input['title'])) {
      if (!empty($input['title'])) {
        $title = strip_tags($input['title']);
        $titleFieldset = "";
      }
    }

    if (isset($input['phone'])) {
      if (!empty($input['phone'])) {
        $phone = strip_tags($input['phone']);
        $phoneFieldset = "Телефон: ";
      }
    }

    $arr = array(
      $titleFieldset => $title,
      $nameFieldset => $name,
      $phoneFieldset => $phone
    );
    foreach ($arr as $key => $value) {
      $txt .= "<b>" . $key . "</b> " . $value . "%0A";
    };
    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");
  }
}
