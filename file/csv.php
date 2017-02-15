<?php
/**
 * Created by IntelliJ IDEA.
 * User: langlive
 * Date: 17/2/6
 * Time: 下午6:30
 */


$list = array (
    array('aaa', 'bbb', 'ccc', '史慧鹏'),
    array('123', '456', '789'),
    array('"aaa"', '"bbb"')
);

$fp = fopen('file.csv', 'w');

foreach ($list as $fields) {
    fputcsv($fp, $fields);
}

fclose($fp);
?>