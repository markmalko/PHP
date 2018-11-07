<form method="post">
    <p>Enter your name:</p>
    <input type="text" name="name">
    <p>Enter your surname:</p>
    <input type="text" name="surname">
    <br>
    <input type="submit">
</form>
<?php
$time = date('H');
$full_name = $_POST['name'] . $_POST['surname'];
setcookie($full_name);
function greeting($time){
    if($time>5 && $time<11){
        echo 'Доброе утро, ' . $_COOKIE['full_name'];
    }elseif ($time>11 && $time<16){
        echo 'Добрый день, ' . $_COOKIE['full_name'];
    }elseif ($time>16 && $time<00){
        echo 'Добрый вечер, ' . $_COOKIE['full_name'];
    }else{
        echo 'Доброй ночи, ' . $_COOKIE['full_name'];
    }
}
greeting($time);
