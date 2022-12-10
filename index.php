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
if ($text=="📚 Kurslarimiz" && $step=="birinchi"){
    $option = [
        ["Matematika", "Fizika"],
        ["Ingliz tili", "Rus tili"],
        ["Orqaga qaytish"]
    ];
    $keyb = $telegram->buildKeyBoard($option,false,true);
    $step="ikkinchi";
    $content = ['chat_id' => $chat_id, 'reply_markup' =>$keyb, 'text' => "Kurslarimiz: \n\n 1. PHP \n 2. Python \n 3. Java \n 4. C++ \n 5. C# \n 6. JavaScript \n 7. HTML \n 8. CSS \n 9. SQL \n 10. C \n 11. Ruby \n 12. Swift \n 13. Kotlin \n 14. Go \n 15. Dart \n 16. R \n 17. Perl \n 18. Assembly \n 19. Pascal \n 20. Bash \n 21. MATLAB \n 22. Lua \n 23. Objective-C \n 24. Scala \n 25. Groovy \n 26. Haskell \n 27. Rust \n 28. Julia \n 29. Visual Basic \n 30. TypeScript \n 31. PHP \n 32. PHP \n 33. PHP \n 34. PHP \n 35. PHP \n 36. PHP \n 37. PHP \n 38. PHP \n 39. PHP \n 40. PHP \n 41. PHP \n 42. PHP \n 43. PHP \n 44. PHP \n 45. PHP \n 46. PHP \n 47. PHP \n 48. PHP \n 49. PHP \n 50. PHP"];
    $telegram->sendMessage($content);
}
if($text=="Orqaga qaytish" && $step=="ikkinchi") {
    $option = [
        ["📚 Kurslarimiz", "📝 Ro'yxatdan o'tish"],
        ["📞 Biz bilan bog'lanish", "📩 Biz bilan aloqa"],
        ["Orqaga qaytish"]
    ];
    $keyb = $telegram->buildKeyBoard($option, false, true);
    $step = "birinchi";
    $content = ['chat_id' => $chat_id, 'reply_markup' => $keyb];
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
