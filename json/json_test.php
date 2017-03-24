<?php
/**
 * Created by IntelliJ IDEA.
 * User: langlive
 * Date: 17/3/6
 * Time: 下午12:06
 */

$info = '{"os":"IOS","channel":"GETUI","push_id":"d2bc949603a2fdf9acf0b96bc513124f","stamp":"1488733600","live_notify":1,"no_notify":0,"no_notify_start":"23:00:00","no_notify_end":"08:00:00"}';

$info = json_decode($info, true);

$show = '';
foreach ($info as $_k => $_val) {
    $_val_show = '';
    switch ($_k) {
        case 'live_notify':
            if ($_val == '1') {
                $_val_show = '推送已开启:' . $_val;
            } else {
                $_val_show = '推送未开启:' . $_val;
            }
            break;
        case 'no_notify':
            if ($_val == '1') {
                $_val_show = '推送时段:' . $info['no_notify_start'] . $info['no_notify_end'];
            } else {
                $_val_show = '推送时段:全天';
            }
            break;
        case 'stamp':
            $_val_show = '推送更新时间:' . date('Y-m-d H:i:s', $info['stamp']);
            break;
        default:
            continue;
    }
    if($_val_show){
        $show.=$_val_show.PHP_EOL;
    }
}


//function
echo($show);