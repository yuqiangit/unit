<?php
/**
 * Created by IntelliJ IDEA.
 * User: langlive
 * Date: 17/2/6
 * Time: 下午6:30
 */


$json = '{"link_android":"com.lang.lang.ui.activity.room.YunfanLiveActivity","param_android":{"stream_direction":0,"live_id":"10000391484641257","live_key":null,"live_url":"rtmp:\/\/video.langlive.com\/live\/10000391484641257","pfid":"1000039"},"push_id":1491035817,"title":"浪live","content":"个推推送测试：2017-04-01 16:36:57","custom_push":true,"pfid":"1000039"}';

var_dump(json_decode($json,true));

