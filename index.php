<?php

require_once "Telegram.php";
$e_message = "! Xatolik \n";

try {
$telegram =new Telegram("5866392319:AAGZ1tI3nsErE3KE9_YIPu9GkQfeVUgFX78");
$chat_id = $telegram->ChatID();
$username = $telegram->Username();
$text = $telegram->Text();
$step="main";
if ($text == "/start" && $step=="main") {
    $option = [
        ["📚 Kurslarimiz", "📝 Ro'yxatdan o'tish"],
        ["📞 Biz bilan bog'lanish", "📩 Biz bilan aloqa"],
        ["Orqaga qaytish"]
    ];
    $keyb = $telegram->buildKeyBoard($option,false,true);
    $step="birinchi";
    $content = ['chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "Assalomu alaykum, $username! \n\n Bizning botimizdan
    foydalanish uchun quyidagi tugmalardan birini tanlang."];
    $telegram->sendMessage($content);
}
if($text=="Orqaga qaytish" && $step=="birinchi"){
    $option = [
        ["📚 Kurslarimiz", "📝 Ro'yxatdan o'tish"],
        ["📞 Biz bilan bog'lanish", "📩 Biz bilan aloqa"],
        ["Orqaga qaytish"]
    ];
    $keyb = $telegram->buildKeyBoard($option,false,true);
    $step="main";
    $content = ['chat_id' => $chat_id, 'reply_markup' =>$keyb, 'text' => "Assalomu alaykum, $username! \n\n Bizning botimizdan 
    foydalanish uchun quyidagi tugmalardan birini tanlang."];
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
