<?php
require_once Telegram.php;
$telegram =new Telegram("5866392319:AAGZ1tI3nsErE3KE9_YIPu9GkQfeVUgFX78");
$chat_id = $telegram->ChatID();
$username = $telegram->Username();
$text = $telegram->Text();
if ($text == "/start") {

    $content = array('chat_id' => $chat_id,  'text' => "Salom $username");
    $telegram->sendMessage($content);
}
