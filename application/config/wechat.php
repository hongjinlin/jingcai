<?php
/**
 * easywechat 配置文件
 */
$wechat = [
    'debug'  => true,
    'app_id' => 'wxac58eb24a3bce7cc',
    'secret' => '74f539599335ffae3819c265288f9349',
    'token'  => 'ggg',
    // 'aes_key' => null, // 可选
    'log' => [
        'level' => 'debug',
        'file'  => APP_PATH . '/logs/easywechat.log', // XXX: 绝对路径！！！！
    ],
    'oauth' => [
        'scopes'   => ['snsapi_userinfo'],
        'callback' => '/Auth',
    ],
];