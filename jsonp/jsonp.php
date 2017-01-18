<?php
/**
 * Created by PhpStorm.
 * User: langlive
 * Date: 16/10/31
 * Time: 下午4:38
 */
$file = fopen('1.txt','w+');
$d = rand(1,10000);
//$call_back = $_GET;
$call_back = ($_GET['callback']);
//fwrite($file,$call_back.$d);

echo $call_back."({'price':'123','tickets':'999'})";


//fclose($file);