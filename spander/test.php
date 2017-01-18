<?php
/**
 * Created by PhpStorm.
 * User: langlive
 * Date: 16/11/28
 * Time: 下午3:29
 */
$http_proxy = getenv("HTTP_PROXY");
if ($http_proxy) {
    $context = array(
        'http' => array(
            'proxy' => $http_proxy,
            'request_fulluri' => true,
        ),

    );
    $s_context = stream_context_create($context);
} else {
    $s_context = NULL;
}
$ret = file_get_contents("http://www.laruence.com/", false, $s_context);


