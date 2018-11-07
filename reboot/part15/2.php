<?php
session_start();
$_SESSION['name'] = 'value';
$_SESSION['arr'] = ['one', 'two', 'three'];
unset($_SESSION);
var_dump($_SESSION);
