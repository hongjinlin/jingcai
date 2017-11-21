<?php  if ( ! defined('APP_PATH')) exit('No direct script access allowed');

// game redis
// $redis['weixin']['host']                 = '127.0.0.1';
$redis['weixin']['host']                 = '10.0.2.103';
$redis['weixin']['port']                 = 6379;
$redis['weixin']['prefix']               = 'yaoeyaodev';
$redis['weixin']['handle']               = 'weixin';
//$redis['weixin']['password']             = 'xxisssi887x';
$redis['weixin']['serialize']            = 'none';
$redis['weixin']['pconnect']             = 1;
