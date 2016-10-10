<?php

/**
 * Created by PhpStorm.
 * User: Christophe
 * Date: 10/9/2016
 * Time: 3:23 PM
 */
class Object
{

    public $aMemberVar = 'aMemberVar Member Variable';
    public $aFuncName = 'aMemberFunc';


    function aMemberFunc() {
        print 'Inside `aMemberFunc()`';
    }

}

$foo = new Foo;