<?php
/**
 * Created by PhpStorm.
 * User: langlive
 * Date: 16/11/10
 * Time: 下午12:04
 */
$data['auto_id'] = 'v';
$data['type'] = 'm';
$data['msg'] = 'y';
$data['push_range'] = '你好';//直播间
$data['live_id'] = 'ggg';
$data_json = json_encode($data,JSON_UNESCAPED_UNICODE);
var_dump($data_json);
var_dump(json_decode($data_json,true));