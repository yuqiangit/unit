<?php

/**
 * Created by IntelliJ IDEA.
 * User: langlive
 * Date: 17/1/16
 * Time: 下午12:28
 */
class Test
{

    function hello()
    {
        echo 'hello world';
    }

    function test()
    {

    }
}

    $res = method_exists(new Test(),'tes1t');
var_dump($res);