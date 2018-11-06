<?php
$months = file('months.txt');
foreach ($months as $key => $value) {
	echo $key . ' - ' . $value . '<br>';
}