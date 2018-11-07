<?php
class Hello{
    public static function helloWorld(){
        return 'This is a static function!';
    }
}
echo Hello::helloWorld();