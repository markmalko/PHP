<?php
$arr = get_loaded_extensions();
file_put_contents('extensions.txt', $arr);
$arr1 = get_defined_constants();
file_put_contents('constants.txt', $arr1);