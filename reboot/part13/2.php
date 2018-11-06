<?php
$str = file_get_contents('point.txt');
var_dump(unserialize($str));
