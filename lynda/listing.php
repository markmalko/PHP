<?php
$arr = array(array('name' => 'John', 'date'=>'1998'), array('name' => 'Mary', 'date'=>'1990'), array('name' => 'Chris', 'date'=>'1978'), array('name' => 'Liz', 'date'=>'1978'));
for($i=0; $i<count($arr); $i++){
    echo $arr[$i]['name'] . ' was born in ' . $arr[$i]['date'] . '. <br>';
}