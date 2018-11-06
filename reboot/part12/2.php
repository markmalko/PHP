<?php
function sum(...$numbers){
	$arr = array_sum($numbers);
	return $arr;
}
echo sum(5,10,24);