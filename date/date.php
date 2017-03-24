<?php
/**
 * Created by IntelliJ IDEA.
 * User: langlive
 * Date: 17/3/6
 * Time: 下午3:00
 */

$date = getdate();
$available_year = substr($date['yday'] / 365 * 7, 0, 3);
$info = explode('.', $available_year);
$is_half = $info[1] >= 5 ? 5 : 0;
echo '本年度的第' . $date['yday'] . '天<br>'.PHP_EOL;
echo '可用年假为' . $info[0] . '.' . $is_half . '天'.PHP_EOL;