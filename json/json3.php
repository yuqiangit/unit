<?php
/**
 * Created by IntelliJ IDEA.
 * User: langlive
 * Date: 17/2/15
 * Time: 上午11:31
 */
$arr = '{"result":[{"pfid":"1000365","subject":"1000037","from":"1000037","ts":1487147441736,"status":0,"index":"58a411b10d10b81c8a196f5d","content":"YsheicnifnfjfnjdndixmkdjduuzowkbdurjfofkodjOsjwindjfonfifbfinfirnfifnkfnfirjidjri😏😄😄😁😋😁😃😉😋😄😭😎😊😋🐦🐼🐗🦉🙊🐗🙉🐴"},{"pfid":"1000365","subject":"1000037","from":"1000037","ts":1487147417213,"status":0,"index":"58a411990d10b81c8a196f5b","content":"{\\"imgurl\\":\\"http:\\\\/\\\\/playback-langlive.cn-bj.ufileos.com\\\\/645792c5813b95629e77e1bdb41a9c54.jpg\\",\\"msg_type\\":3,\\"title\\":\\"[圖片]\\"}"},{"pfid":"1000365","subject":"1000037","from":"1000037","ts":1487147409670,"status":0,"index":"58a411910d10b81c8a196f59","content":"999"},{"pfid":"1000365","subject":"1000037","from":"1000037","ts":1487147408063,"status":0,"index":"58a411900d10b81c8a196f57","content":"888"},{"pfid":"1000365","subject":"1000037","from":"1000037","ts":1487147406316,"status":0,"index":"58a4118e0d10b81c8a196f55","content":"777"},{"pfid":"1000365","subject":"1000037","from":"1000037","ts":1487147405200,"status":0,"index":"58a4118d0d10b81c8a196f53","content":"666"},{"pfid":"1000365","subject":"1000037","from":"1000037","ts":1487147404150,"status":0,"index":"58a4118c0d10b81c8a196f51","content":"555"},{"pfid":"1000365","subject":"1000037","from":"1000037","ts":1487147403034,"status":0,"index":"58a4118b0d10b81c8a196f4f","content":"444"},{"pfid":"1000365","subject":"1000037","from":"1000037","ts":1487147402361,"status":0,"index":"58a4118a0d10b81c8a196f4d","content":"333"},{"pfid":"1000365","subject":"1000037","from":"1000037","ts":1487147400328,"status":0,"index":"58a411880d10b81c8a196f4b","content":"222"}],"ret_code":"0","ret_msg":"ok"}';

$arr = json_decode($arr,true);

var_dump($arr);
