<?php
/**
 * Created by IntelliJ IDEA.
 * User: langlive
 * Date: 17/1/11
 * Time: 下午5:17
 */
$arr = [
    '1000047' => '99',
    '1000079' => '999',
    '1000365' => '33'
];

//array_shift($arr);
//var_dump($arr);exit;

arsort($arr);
var_dump($arr);
//$arr = array_flip($arr);
//$info = array_pop($arr);
//var_dump($info);