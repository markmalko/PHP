<?php
$numbers = array(1, 3, 67, 45, 45);
echo $numbers[2] . '<br>';
$mixed = array(5, 'dog', '6', 'fox', array(1,5,7));
echo $mixed[4][1];
$mixed[] = 'horse';
var_dump($mixed);