<?php
/**
 * Created by PhpStorm.
 * User: langlive
 * Date: 16/11/4
 * Time: 下午4:51
 */

//$black_word_all = 'cache:black_word';
//$rds = RedisClient::db_name('cache');
$new_word = '';
$live_title = '嗨 来开播啦';
$vowels = array(",", ",", "。", "。", ";", ";", "!", "@", "#", "$","%","^","&","*","(",")","<",">","?","."," ");
$live_title = str_replace($vowels, "",$live_title);
//info('敏感词-title'.$live_title);
$word_arr = mb_str_split($live_title);
$len = count($word_arr);
for ($i = $len; $i > 0; $i--) {
    for ($x = 0; $x <= $len - $i; $x++) {
        for ($m = $x; $m < $x + $i; $m++) {
            $new_word .= $word_arr[$m];
        }
        echo $new_word.PHP_EOL;
//        $res = $rds->sIsMember($black_word_all, $new_word);//json_encode($new_word, JSON_UNESCAPED_UNICODE)
//        if($res)
//            return $res;
        $new_word = '';
    }
}

function mb_str_split($str)
{
    return preg_split('/(?<!^)(?!$)/u', $str);
}

