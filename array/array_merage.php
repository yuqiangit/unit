<?php
/**
 * Created by IntelliJ IDEA.
 * User: langlive
 * Date: 17/2/9
 * Time: 下午2:51
 */
$arr =['111','A'];
$arr2 =['2'=>'3333','A'];
$rs = array_merge($arr,$arr2);
$rs = array_unique($rs);
var_dump($rs);