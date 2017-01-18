<?php
/**
 * Created by IntelliJ IDEA.
 * User: langlive
 * Date: 17/1/18
 * Time: 下午3:45
 */
class CallableClass
{
    function __invoke($x) {
        var_dump($x);
    }
}
$obj = new CallableClass;
$obj(5);
var_dump(is_callable($obj));