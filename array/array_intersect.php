<?php
/**
 * Created by PhpStorm.
 * User: langlive
 * Date: 16/12/8
 * Time: 上午11:43
 */
//$res = array_intersect([1],[3,2]);

$arr1 = [
    'name'=>['f'=>1,'l'=>2]
];

$arr2 = [
    'name'=>['f'=>1,'l'=>3]
];

$res = array_intersect($arr1,$arr2);
var_dump($res);