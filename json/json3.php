<?php
/**
 * Created by IntelliJ IDEA.
 * User: langlive
 * Date: 17/2/15
 * Time: 上午11:31
 */
$arr = '{
  "query": {
    "bool": {
      "must": [
        {"match": { "message": "push start result 推送完" }},
        {"match": { "message": "1000143" }} 
      ]
    }
  }
}';

$res =  var_export($param, true);

var_dump($res);
