<?php
$a = 20;
$b = 6;
if($a>$b){
    echo $a . ' is greater than ' . $b;
}
echo '<hr>';
$new_user = true;
if ($new_user){
    echo '<h1>Welcome</h1>';
    echo '<p>We glad to see you again</p>';
}
echo '<hr>';
$first = 5;
$second = 0;
if($second!==0){
    echo $first/$second;
}else{
    echo "Division on zero";
}