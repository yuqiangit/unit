<?php
/**
 * Created by IntelliJ IDEA.
 * User: langlive
 * Date: 17/1/18
 * Time: 下午3:48
 */

class SubObject
{
    static $instances = 0;
    public $instance;

    public function __construct() {
        $this->instance = ++self::$instances;
    }

    public function __clone() {
        echo 'watch:'.self::$instances;
        $this->instance = ++self::$instances;
    }
}

/**
 * @property int instance
 */
class MyCloneable
{
    public $object1;
    public $object2;

    function __clone()
    {

//         强制复制一份this->object， 否则仍然指向同一个对象
        $this->object2 = clone $this->object2;
        $this->object1 = clone $this->object1;
    }
}

$obj = new MyCloneable();

$obj->object1 = new SubObject();
$obj->object2 = new SubObject();

var_dump($obj);

$obj2 = clone $obj;
var_dump($obj2);
//
//
//print("Original Object:\n");
//print_r($obj);
//
//print("Cloned Object:\n");
//print_r($obj2);