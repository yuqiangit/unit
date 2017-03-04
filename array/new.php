<?php
/**
 * Created by IntelliJ IDEA.
 * User: langlive
 * Date: 17/2/28
 * Time: 下午2:50
 */
$res = array (  'Rets' =>   array (    0 =>     array (      'Rspcode' => 0,      'Msg_Id' => '214882645675190504',      'Mobile' => '18257134006',      'Fee' => 1,    ),  ),);

var_dump($res['Rets'][0]['Msg_Id']);


$array = ['Dest_Id','Mobile'];
$array2 = ['Msg_Id','Dest_Id'];

var_dump(array_intersect($array,$array2));

