<?php
$str1= 'Something will happen';
$str2 = ' tonight!';
$string = $str1 . $str2;
$string = strtolower($string);
$string = ucfirst($string);
$string = ucwords($string);
echo $string . '<br>';
echo 'Strlen: ' .strlen($string) . '<br>';
echo 'Strstr: ' .strstr($string, 'Will') . '<br>';
echo 'Str_Replace: ' . str_replace('Will', 'Is going to', $string) . '<br>';
echo 'Repeat: ' . str_repeat($string, 2) . '<br>';
echo 'Position: ' . strpos($string, 'Tonight') . '<br>';
echo 'Substraction: ' . substr($string, 10, 10) . '<br>';
echo 'Strchr: ' . strchr($string, 'p');