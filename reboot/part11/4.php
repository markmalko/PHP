<?php
for ($i=5; $i<10; $i++) { 
	$number = rand(0,100);
	$arr[] = $number;
}
asort($arr);
foreach ($arr as $key => $value) {
	echo $key . " - " . $value . '<br>';
}

