<?php /* Smarty version Smarty-3.1.6, created on 2017-01-19 14:58:28
         compiled from "E:/wamp64/www/program/uhouse/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:8391587f13afb10049-72253784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd6215f540636f074e3befa18e670c523e956e55' => 
    array (
      0 => 'E:/wamp64/www/program/uhouse/Home/View\\Index\\index.html',
      1 => 1484809106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8391587f13afb10049-72253784',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587f13b151265',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587f13b151265')) {function content_587f13b151265($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width">
    <title>UHouse</title>
    <link rel="stylesheet" type="text/css" href="http://cache.amap.com/lbs/static/main1119.css">
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            font: normal 15px "微软雅黑";
        }

        body {
            overflow-y: hidden;
        }

        #header {
            position: relative;
            height: 90px;
        }

        #logo-img {
            display: inline-block;
            margin-top: 10px;
            margin-bottom: 10px;
            margin-left: 50px;
            height: 70px;
            width: 90px;
        }

        #search-box {
            display: inline-block;
            margin-left: 50px;
            height: 90px;
            width: 302px;
        }

        #search-text {
            position: absolute;
            display: inline-block;
            margin-top: 28px;
            height: 30px;
            width: 260px;
            font-size: 20px;
        }

        #search-button {
            position: absolute;
            display: inline-block;
            margin-top: 28px;
            margin-left: 270px;
            height: 34px;
            width: 34px;
            font-size: 20px;
        }

        #option-box {
            display: inline-block;
            margin-left: 20px;
            height: 90px;
            width: 500px;
        }

        .option-title {
            position: absolute;
            margin-top: 10px;
            height: 30px;
            width: 100px;
            font-size: 20px;
        }

        .option-option {
            display: inline-block;
            margin-left: 50px;
            height: 90px;
            width: 100px;
        }

        .option-choice {
            position: absolute;
            margin-top: 50px;
            height: 30px;
            width: 100px;
            z-index: 1;
        }

        #change-box {
            display: inline-block;
            margin-left: 20px;
            height: 90px;
            width: 250px;
        }

        #change-button {
            position: absolute;
            margin-top: 28px;
            height: 34px;
            width: 204px;
            font-size: 20px;
        }

        #aside {
            position: absolute;
            margin-left: calc(100% - 450px);
            height: calc(100% - 90px);
            width: 450px;
            overflow-y: auto;
        }

        .list-box {
            height: 230px;
            border-bottom: 3px solid #000;
        }

        .list-title {
            height: 50px;
            line-height: 50px;
            width: 450px;
            overflow: hidden;
        }

        .list-title-text {
            position: absolute;
            margin-top: 15px;
            height: 20px;
            width: 450px;
        }

        .list-info {
            display: inline-block;
            height: 180px;
            width: 150px;
        }

        .list-info-par {
            margin-top: 20px;
            height: 25px;
            width: 150px;
        }

        .list-info-location {
            margin-top: 20px;
            margin-bottom: 20px;
            height: 20px;
            width: 150px;
        }

        .list-img {
            position: absolute;
            display: inline-block;
            height: 180px;
            width: 300px;
            font-size: 10px;
        }

        #section {
            position: absolute;
            height: calc(100% - 90px);
            width: calc(100% - 450px);
        }

        #container {
            display: block;
        }

        #calculator {
            display: none;
        }
    </style>
    <script type="text/javascript" src="http://cache.amap.com/lbs/static/es5.min.js"></script>
    <script type="text/javascript" src="http://webapi.amap.com/maps?v=1.3&key=5c263eb5e0bee0cf93225d78b281e0f3&plugin=AMap.PlaceSearch,AMap.Geocoder"></script>
    <script type="text/javascript" src="http://cache.amap.com/lbs/static/addToolbar.js"></script>
</head>
<body>
    <div id="header">
        <img src="http://127.0.0.1:8088/program/uhouse/home/public/img/UHouse.jpg" id="logo-img" height="70">
            <div id="search-box">
                <input type="text" name="keywords" id="search-text" placeholder="关键词：">
                <input type="button" name="Submit" id="search-button" value="搜" onclick="geocoder();">
            </div>
     
        <div id="option-box">
            <div class="option-option">
                <p align="center" class="option-title">售价</p>
                <select name="option-price" class="option-choice" size="1">
                    <option value="price-A" selected="selected">不限
                    <option value="price-B">100万以下
                    <option value="price-C">100-150万
                    <option value="price-D">150-200万
                    <option value="price-E">200-300万
                    <option value="price-F">300-500万
                    <option value="price-G">500-800万
                    <option value="price-H">800-1000万
                    <option value="price-I">1000万以上
                </select>
            </div>
            <div class="option-option">
                <p align="center" class="option-title">面积</p>
                <select name="option-area" class="option-choice" size="1">
                    <option value="area-A" selected="selected">不限
                    <option value="area-B">50平以下
                    <option value="area-C">50-70平
                    <option value="area-D">70-90平
                    <option value="area-E">90-110平
                    <option value="area-F">110-130平
                    <option value="area-G">130-150平
                    <option value="area-H">150-200平
                    <option value="area-I">200平以上
                </select>
            </div>
            <div class="option-option">
                <p align="center" class="option-title">户型</p>
                <select name="option-room" class="option-choice" size="1">
                    <option value="room-A" selected="selected">不限
                    <option value="room-B">一室
                    <option value="room-C">二室
                    <option value="room-D">三室
                    <option value="room-E">四室
                    <option value="room-F">五室
                    <option value="room-G">五室以上
                </select>
            </div>
        </div>
        <div id="change-box">
            <input type="button" id="change-button" value="显示计算器">
        </div>
    </div>
    <div id="aside">
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <div class="list-box" name="house2">
                <div class="list-title">
                    <p align="center" class="list-title-text"><?php echo $_smarty_tpl->tpl_vars['v']->value['condo_title'];?>
</p>
                </div>
                <div class="list-info">
                    <p align="center" class="list-info-par">总价:<?php echo $_smarty_tpl->tpl_vars['v']->value['condo_price'];?>
</p>
                    <p align="center" class="list-info-par">面积:<?php echo $_smarty_tpl->tpl_vars['v']->value['condo_area'];?>
</p>
                    <p align="center" class="list-info-par">户型:<?php echo $_smarty_tpl->tpl_vars['v']->value['condo_type'];?>
</p>
                    <p align="center" class="list-info-location">小区:<?php echo $_smarty_tpl->tpl_vars['v']->value['housing'];?>
</p>
                    <p align="center" class="list-info-par">位置:<?php echo $_smarty_tpl->tpl_vars['v']->value['condo_loc'];?>
</p>
                </div>
                <img src="http://127.0.0.1:8088/program/uhouse/home/public/img/house1.jpg" class="list-img">
            </div>
        <?php } ?>
    </div>
    <div id="section">
        <div id="container"></div>
        <iframe src="calculator.html" id="calculator"></iframe>
    </div>
    <script type="text/javascript" src="http://127.0.0.1:8088/program/uhouse/home/public/js/map.js"></script>
</body>
</html><?php }} ?>