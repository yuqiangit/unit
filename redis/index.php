<?php
/**
 * Created by IntelliJ IDEA.
 * User: langlive
 * Date: 17/2/16
 * Time: 上午10:24
 */
$host = '127.0.0.1';
$port = '6379';
$rds = $redis = new Redis();
$redis->connect($host, $port);
$info = $redis->hGetAll('test');
if(!isset($info['live_id'])) {
    return null;
}