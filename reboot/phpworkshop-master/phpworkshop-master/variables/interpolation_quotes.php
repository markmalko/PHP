<?php
// Подавляем вывод замечаний
error_reporting(E_ALL & ~E_NOTICE);
// Подставляем переменную $text в строки,
// обрамленные двойными кавычками
$text = "Паро";
echo "Едет $textвоз<br />";     // Едет
echo "Плывет $textход<br />";   // Плывет
echo "Едет {$text}воз<br />";   // Едет Паровоз
echo "Плывет {$text}ход<br />"; // Плывет Пароход
