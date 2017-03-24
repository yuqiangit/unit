<?php
/**
 * Created by IntelliJ IDEA.
 * User: langlive
 * Date: 17/3/7
 * Time: 下午5:42
 */
$ban_user_time = 3600;
$msg = strtr('您因違反浪Live規範，帳號已被永久停權，如有問題請聯繫官方客服service.tw@langlive.com。', ['永久停權' => '停權' . ($ban_user_time / 60 / 60) . '小時']);
echo $msg;