<?php
//echo ceil(1000.00).PHP_EOL;

$info =  2000.2122 % 20.0;
//var_dump($info);

$info = is_numeric('2000.122');
$info_arr = explode('.','2000.00000');
if($info_arr[1] != 0){
    echo 'no';
}else{
    echo 'yes';
}
echo PHP_EOL;
var_dump($info_arr);