<?php
setcookie('username', 'Mark');
if(isset($_COOKIE['username'])){
    echo "Your name is " .  $_COOKIE['username'];
}else{
    echo 'Cookie is not set';
}

if (isset($_GET['title']) || isset($_GET['author']))
{
echo '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Bookstore</title>
</head>
<body>

<p>The book you are looking for is</p>
<ul>
    <li><b>Title</b>:' .  $_GET['title'] . '</li>' .
    '<li><b>Author</b>:' . $_GET['author'] .
'</ul>
</body>
</html>';
    }else{
    echo '<br>Are you looking for a book?';
}