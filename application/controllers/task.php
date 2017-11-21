<?php
define('APP_PATH', dirname( __FILE__));
define('APP_VIEW', 'Server');
define('GPM', 1);

error_reporting(E_ALL ^ E_NOTICE);

ob_start();

if(strpos(php_sapi_name(),'cli') === false){
    die("sorry");
}

$app = new Yaf_Application(APP_PATH . '/../config/application.ini');
$app->bootstrap();

$crontab = load('Config')->load('crontab')->get('crontab');

$cb = new Crontab();
foreach($crontab as $key => $file){
    $cb->add($key, function() use ($file){
        require(APP_PATH.'/crontab/'.$file);
    });
}

ob_flush();

$cb->run();
