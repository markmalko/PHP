<?php
$file = 'hello.txt';
$words = file_get_contents($file);
echo $words;