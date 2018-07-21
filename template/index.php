<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 19.07.2018
 * Time: 19:18
 */
$arr = array('Main', 'News', 'Contacts');
$tpl = file_get_contents('main.html');
function change($arr, $tpl)
{
    foreach ($arr as $item) {
        str_replace('{LI}', $item, $tpl);
        echo $tpl;
    }
}
change($arr, $tpl);


