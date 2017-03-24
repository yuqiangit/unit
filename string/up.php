<?php
/**
 * Created by IntelliJ IDEA.
 * User: langlive
 * Date: 17/3/18
 * Time: 下午7:01
 */

$str = '推荐up er';
$start = strpos($str,'up');

$before = substr($str,$start-1,1);
$after = substr($str,$start+2,1);
//echo strlen($before);
//echo strlen($before);

//echo $before.PHP_EOL;




echo $before.PHP_EOL;
//echo strlen($before).PHP_EOL;
echo $after.PHP_EOL;
//echo strlen($after).PHP_EOL;

//如果up 前面 都 后面 为空 直接拒绝掉
//如果 up 前面 或 后面 为中文 直接拒绝掉


//$info = explode('up',$str);

//var_dump($info);