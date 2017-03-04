<?php
/**
 * Created by IntelliJ IDEA.
 * User: langlive
 * Date: 17/2/23
 * Time: 下午5:20
 */

$time =  time().PHP_EOL;
for ($i = 0;$i < 1000000;$i++){
    echo rand(1, 2);
}
echo PHP_EOL.$time.PHP_EOL;
echo PHP_EOL.time().PHP_EOL;
