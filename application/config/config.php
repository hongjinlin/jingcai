<?php  if ( ! defined('APP_PATH')) exit('No direct script access allowed');
$config = array(
    'title'             => 'yaoeyao-dev',//服务器名称
    
    'secret'            => 'ssss$fa3A1i',

    'apc_key'           => 'yaoeyao-dev',

    'white_controller'  => array(
        'Index', 'Login', 'User' , 'Logout', 'Auth'
    ),

    'home_url'          => 'http://dev.yaoeyao.cn',

    'static_url'        => '/',

    'hash_algorithm'	=> 'PASSWORD_DEFAULT',

    'hash_option_cost'	=> 12,

);
