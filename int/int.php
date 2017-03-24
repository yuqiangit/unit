<?php
/**
 * Created by IntelliJ IDEA.
 * User: langlive
 * Date: 17/3/24
 * Time: 上午10:31
 */

//php int 根据平台不同所能展现的长度不同
// 32位系统 20亿的无符号位
// 64位系统 9E18

$number = (int)9223372036854775807;

var_dump($number);