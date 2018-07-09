<?php
$var1 = '3';
echo gettype($var1) . '<br>';
$var2=3;
$var3 = $var1 + $var2;
echo gettype($var3)  . '<br>';
$var4 = 'I have ' . $var3 . ' cats';
echo $var4 . '<br>';
echo gettype($var4);

