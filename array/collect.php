<?php
/**
 * Created by IntelliJ IDEA.
 * User: langlive
 * Date: 17/3/20
 * Time: 下午12:43
 */
$status = array();
if (!isset($status['hello']) || !$status['hello']){
    $status['hello'] = 0;
}

$status['hello'] = ++$status['hello'];
$status['hello'] = ++$status['hello'];

var_dump($status);