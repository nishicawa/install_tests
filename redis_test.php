<?php
$redis = new Redis();
$redis->connect('127.0.0.1');
$redis->set('foo','bar');
var_dump($redis->get('foo'));

