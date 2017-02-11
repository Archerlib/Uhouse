<?php /* Smarty version Smarty-3.1.6, created on 2017-02-11 23:30:46
         compiled from "E:/wamp64/www/uhouse/Uhouse/uhouse/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:6836588db77aa56539-43487538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c86a45a4d73e4901d0774c2fa6cfc3325c430080' => 
    array (
      0 => 'E:/wamp64/www/uhouse/Uhouse/uhouse/Home/View\\Index\\index.html',
      1 => 1486827043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6836588db77aa56539-43487538',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_588db77ab5fc5',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588db77ab5fc5')) {function content_588db77ab5fc5($_smarty_tpl) {?>﻿<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width">
    <title>毕业生租房</title>
    <link rel="stylesheet" href="http://cache.amap.com/lbs/static/main1119.css" />
    <link rel="stylesheet" href="http://cache.amap.com/lbs/static/jquery.range.css" />
    <script src="http://cache.amap.com/lbs/static/jquery-1.9.1.js"></script>
    <script src="http://cache.amap.com/lbs/static/es5.min.js"></script>
    <script src="http://webapi.amap.com/maps?v=1.3&key=22d3816e107f199992666d6412fa0691&plugin=AMap.ArrivalRange,AMap.Scale,AMap.Geocoder,AMap.Transfer,AMap.Autocomplete"></script>
    <script src="http://cache.amap.com/lbs/static/jquery.range.js"></script>
    <style>
    .control-panel {
        position: absolute;
        top: 30px;
        right: 20px;
    }

    .control-entry {
        width: 280px;
        background-color: rgba(119, 136, 153, 0.8);
        font-family: fantasy, sans-serif;
        text-align: left;
        color: white;
        overflow: auto;
        padding: 10px;
        margin-bottom: 10px;
    }

    .control-input {
        margin-left: 120px;
    }

    .control-input input[type="text"] {
        width: 160px;
    }

    .control-panel label {
        float: left;
        width: 120px;
    }

    #transfer-panel {
        position: absolute;
        background-color: white;
        max-height: 80%;
        overflow-y: auto;
        top: 30px;
        left: 20px;
        width: 250px;
    }
    </style>
</head>

<body>
    <div id="container"></div>
    <div class="control-panel">
        <div class="control-entry">
            <label>选择工作地点：</label>
            <div class="control-input">
                <input id="work-location" type="text">
            </div>
        </div>
        <div class="control-entry">
            <label>选择通勤方式：</label>
            <div class="control-input">
                <input type="radio" name="vehicle" value="SUBWAY,BUS" onClick="takeBus(this)" checked/> 公交+地铁
                <input type="radio" name="vehicle" value="SUBWAY" onClick="takeSubway(this)" /> 地铁
            </div>
        </div>
    </div>
    <div id="transfer-panel"></div>
    <script>
    var map = new AMap.Map("container", {
        resizeEnable: true,
        zoomEnable: true,
        center: [116.397428, 39.90923],
        zoom: 11
    });
    </script>
</body>

</html><?php }} ?>