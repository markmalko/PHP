<?php
$login = 'root';
$password = '111111';
if (empty($_POST['login'])){
    echo 'Enter your login';
}
elseif (empty($_POST['password'])){
    echo 'Enter your password';
}
elseif($_POST['login'] != $login || $_POST['password'] != $password){
    echo 'Invalid Login or Password';
}else{
    echo 'Hello, ' . $_POST['login'] . '<br>';
    echo 'Ваш IP-адрес: '  . $_SERVER['REMOTE_ADDR'] . '<br>';
    echo 'Ваш браузер: ' . $_SERVER['HTTP_USER_AGENT'];
}
echo '<br>';
echo 'Your favourite programming languages are: <br>';
if(isset($_POST['select'])){
    foreach ($_POST['select'] as $item){
        echo $item . '<br>';
    }
}