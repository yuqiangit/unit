<?php
/**
 * Created by PhpStorm.
 * User: langlive
 * Date: 16/12/8
 * Time: 上午10:50
 */
$ar1 = array(10, 10000, 100, 10000);
$ar2 = array(1, 3, 2, 4);
array_multisort($ar1, $ar2);

var_dump($ar1);
var_dump($ar2);