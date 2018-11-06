<?php
$date = date('Y-m-d-G-i-s');
//echo $date;
$data = rand(0, 1000000);
file_put_contents($date . '.txt', $data);