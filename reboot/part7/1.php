<?php
$number = 3;
$exponent = 2;
    if ($exponent == 1) {
        return $number;
    }else{
    return ($exponent/2 & 1 ? $number : 1) * $tmp * $tmp;
}
echo $result;