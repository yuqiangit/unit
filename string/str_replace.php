<?php
/**
 * Created by IntelliJ IDEA.
 * User: langlive
 * Date: 17/2/4
 * Time: 下午3:21
 */

$sql = 'insert into tb_patch (os,version,url,hash,insert_time) values (:os,:version,:url,:hash,:insert_time)';

$param = [':os' => 'xx', ':version' => 'v.1', ':url' => 'www.url', ':hash' => 'hash111', ':insert_time' => time()];
foreach ($param as $_k => $_v){
    $sql = str_replace($_k,$_v,$sql);
}
var_dump($sql);
