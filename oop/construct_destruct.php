<?php

/**
 * Created by IntelliJ IDEA.
 * User: langlive
 * Date: 17/1/18
 * Time: 上午11:23
 */
class Tests
{
    function __construct()
    {
        printf('come __construct' . PHP_EOL);
    }

    function __destruct()
    {
        printf('come __destruct' . PHP_EOL);
    }

    static function come_static()
    {
        printf('come __static' . PHP_EOL);
    }

}

$test = new Tests();
Tests::come_static();
Tests::come_static();
Tests::come_static();
Tests::come_static();
Tests::come_static();
Tests::come_static();
Tests::come_static();