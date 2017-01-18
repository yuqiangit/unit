<?php
/**
 * Created by PhpStorm.
 * User: langlive
 * Date: 16/11/16
 * Time: 下午2:53
 */
//echo (boolean)[];


if(array()){
    echo '空数组是true'.PHP_EOL;
}else{
    echo '空数组是false'.PHP_EOL;
}

var_dump((bool) "");        // bool(false)
var_dump((bool) 1);         // bool(true)
var_dump((bool) -2);        // bool(true)
var_dump((bool) "foo");     // bool(true)
var_dump((bool) 2.3e5);     // bool(true)
var_dump((bool) array(12)); // bool(true)
var_dump((bool) array());   // bool(false)
var_dump((bool) "false");   // bool(true)