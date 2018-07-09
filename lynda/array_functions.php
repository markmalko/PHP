<?php
$numbers = array(1,5,6,8,6546,575,65757,6757,65455);
sort($numbers);
var_dump($numbers);
echo '<hr>';
rsort($numbers);
var_dump($numbers);
echo count($numbers) . '<br>';
echo max($numbers) . '<br>';
echo min($numbers) . '<br>';
echo implode(';', $numbers) . '<br>';



//var_dump(rsort($numbers));