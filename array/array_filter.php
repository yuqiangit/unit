<?php
/**
 * Created by IntelliJ IDEA.
 * User: langlive
 * Date: 17/3/16
 * Time: 下午5:49
 */

function delEmpty($v)
{
    if ($v === "" || $v === "php")   //当数组中存在空值和php值时，换回false，也就是去掉该数组中的空值和php值
    {
        return false;
    }
    return true;
}

$a = array(0 => "pig", 1 => "Cat", 2 => "", 3 => "php");
print_r(array_filter($a, function ($v) {
    if (empty($v)) {
        return false;
    }
    return true;
}
));