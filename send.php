<?php
$url = "https://docs.google.com/forms/u/0/d/e/1FAIpQLSfWDyRFwcUWBqlzBgSR4-9y4Fxyo1_ptlpFpiH3hwwSduuPxA/formResponse";
// сохраняем url, с которого была отправлена форма в переменную utm
// $utm = $_SERVER["HTTP_REFERER"];
// ссылка для переадресации (изменить)
$link = "thanks_page.html";

// массив данных (изменить entry, draft и fbzx)
$post_data = array (
 "entry.1074992270" => $_POST['name'],
 "entry.823185248" => $_POST['phone'],
 "entry.243631546" => $_POST['email'],
//  "entry.444444444" => $utm,
 "draftResponse" => "[null,null,&quot;237962708033305024&quot;]",
 "pageHistory" => "0",
 "fbzx" => "237962708033305024"
);

// Далее не трогать
// с помощью CURL заносим данные в таблицу google
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// указываем, что у нас POST запрос
curl_setopt($ch, CURLOPT_POST, 1);
// добавляем переменные
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
//заполняем таблицу google
$output = curl_exec($ch);
curl_close($ch);

//перенаправляем браузер пользователя на скачивание оффера по нашей ссылке
header('Location: '.$link);
?>