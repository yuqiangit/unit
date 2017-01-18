<?php
/**
 * Created by PhpStorm.
 * User: langlive
 * Date: 16/11/30
 * Time: 下午12:26
 */
$json = '{"request_id":2192874012,"122":{"msg_id":"5813067666546629667","send_time":1480505946}}';

$arr = json_decode($json,true);

//var_dump($arr);
var_dump(isset($arr['error_code']));
var_dump(isset(json_decode($json,true)['error_code']));