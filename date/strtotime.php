<?php
/**
 * Created by IntelliJ IDEA.
 * User: langlive
 * Date: 17/3/15
 * Time: 下午12:28
 */

//$res = date('Y-m-d',strtotime('-1 day'));
//var_dump($res);

$date = date('Y-m-d');
var_dump($date);

$info = date( 'Y-m-d',strtotime('+1 day',strtotime($date)));
var_dump($info);
