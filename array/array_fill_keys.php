<?php
/**
 * Created by IntelliJ IDEA.
 * User: langlive
 * Date: 16/12/28
 * Time: 上午10:31
 */
$val = ['index','index2','index3'];
$val2 = ['index2'=>'every','index'=>'hello','index55'=>'one'];
$res = array_fill_keys($val, 0);
$res = array_intersect_key($val2,$res);
//array_filter($val2,"test");
//array_walk($val2,'new_array',['t1','t2','t3']);

var_dump($res);exit;
list($id,$type,$pfid) = array_values($val2);
$res = compact('id','type','pfid');
var_dump($res);
//function new_array($val,$index){
//    var_dump($val);
//    var_dump($index);
//}
