<?php
/**
 * Created by IntelliJ IDEA.
 * User: langlive
 * Date: 17/1/6
 * Time: 下午5:33
 */

//$a='你19啊你15啊你16啊';
//$b=preg_match('/\d+/',$a,$arr);
//print_r($arr);
//var_dump($b);


$a = 0.1;
$b = 0.7;
$value = 33 * bcadd($a,$b,2);
var_dump($value);