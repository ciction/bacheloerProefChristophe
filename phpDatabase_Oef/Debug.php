<?php

/**
 * Created by PhpStorm.
 * User: Christophe
 * Date: 10/10/2016
 * Time: 14:48
 */
class Debug
{
    static $debugMode = true;


    static function d_echo($var){
        if(self::$debugMode){
            echo $var . '<br>';
        }
    }
}