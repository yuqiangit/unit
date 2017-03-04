<?php
/**
 * Created by IntelliJ IDEA.
 * User: langlive
 * Date: 17/3/1
 * Time: 上午11:47
 */
try {

    //ASCII,JIS,UTF-8,EUC-JP,SJIS
    echo mb_convert_encoding('𤦬','UTF-8');
} catch (Exception $e) {
    var_dump($e);
}