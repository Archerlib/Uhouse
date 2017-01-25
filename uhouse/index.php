<?php

header("content-type:text/html;charset=utf-8");

//利用thinkphp框架开发uhouse商城系统
//入口程序文件

//设置系统的模式
define('APP_DEBUG',true); //开发调试模式
//define('APP_DEBUG',false); //线上生产模式

//给静态资源文件设置访问常量路径
define('SITE_URL',"127.0.0.1:8088/program/uhouse/");
//Home分组：
define('CSS_URL','/Home/Public/css/');
define('IMG_URL','/Home/Public/img/');
define('JS_URL','/Home/Public/js/');

//Admin分组：
define('ADMIN_CSS_URL','/uhouse/Admin/Public/css/');
define('ADMIN_IMG_URL','/uhouse/Admin/Public/img/');

//引入接口文件：ThinkPHP/ThinkPHP.php
include("../ThinkPHP/ThinkPHP.php");
