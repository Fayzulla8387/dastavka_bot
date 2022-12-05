<?php
require_once Telegram.php;
$e_message = "! Xatolik \n";

try {
$telegram =new Telegram("5866392319:AAGZ1tI3nsErE3KE9_YIPu9GkQfeVUgFX78");
$chat_id = $telegram->ChatID();
$username = $telegram->Username();
$text = $telegram->Text();
if ($text == "/start") {
    $content = array('chat_id' => $chat_id,  'text' => "Salom $username");
    $telegram->sendMessage($content);
}
} catch (Throwable $e) {
    $e_message .= $e->getMessage()."\n Qator-";
    $e_message .= $e->getLine()."\n File-";
    $e_message .= $e->getFile();
    sendMessage($e_message);

}
function sendMessage($text)
{
    global $chat_id, $telegram;
    $content = [
        'chat_id' => $chat_id,
        'text' => $text
    ];
    $telegram->sendMessage($content);
}
