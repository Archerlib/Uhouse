<?php /* Smarty version Smarty-3.1.6, created on 2017-02-18 22:26:09
         compiled from "E:/wamp64/www/uhouse/Uhouse/uhouse/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:6836588db77aa56539-43487538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c86a45a4d73e4901d0774c2fa6cfc3325c430080' => 
    array (
      0 => 'E:/wamp64/www/uhouse/Uhouse/uhouse/Home/View\\Index\\index.html',
      1 => 1487427963,
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
<?php if ($_valid && !is_callable('content_588db77ab5fc5')) {function content_588db77ab5fc5($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width">
    <title>UHouse</title>
    <link rel="stylesheet" href="http://cache.amap.com/lbs/static/main1119.css" />
    <link rel="stylesheet" href="http://cache.amap.com/lbs/static/jquery.range.css" />
    <script src="http://cache.amap.com/lbs/static/jquery-1.9.1.js"></script>
    <script src="http://cache.amap.com/lbs/static/es5.min.js"></script>
    <script src="http://webapi.amap.com/maps?v=1.3&key=22d3816e107f199992666d6412fa0691&plugin=AMap.ArrivalRange,AMap.Scale,AMap.Geocoder,AMap.Transfer,AMap.Autocomplete"></script>
    <script src="http://cache.amap.com/lbs/static/jquery.range.js"></script>
    <style>
    #aside {
        height: 100%;
        width: 25%;
    }

    #section {
        height: 100%;
        width: 75%;
    }
    
		#container {
			width: 75%;
			margin-left: 25%;
		}
		
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
		
		#list-box {
            height: 224px;
            width: 100%;
            border: 2px solid #ADF;
			overflow-y: hidden;
        }

        .list-title {
            height: 44px;
            width: 100%;
        }

        .list-title-text {
            height: 35.2px;
            width: 100%;
            margin-top: 4.4px;
        }

        .list-info {
            display: inline-block;
            height: 180px;
            width: 144px;
        }

        .list-info-info {
            width: 100%;
            margin-top: 9px;
            margin-bottom: 9px;
        }

        .list-img {
            display: inline-block;
			position: absolute;
            height: 180px;
            width: 336px;
			overflow-y: hidden;
        }
    </style>
</head>
<body>
    <div id="aside">
    	<div id="list-box">
        <div class="list-title">
            <p align="center" class="list-title-text"></p>
        </div>
        <div class="list-info">
            <p align="center" class="list-info-info">总价：</p>
            <p align="center" class="list-info-info">面积：</p>
            <p align="center" class="list-info-info">户型：</p>
            <p align="center" class="list-info-info">小区：</p>
            <p align="center" class="list-info-info">位置：</p>
        </div>
        <div class="list-img">
        	<img src="" width="336px" height="180px">
        </div>
    </div>
    </div>
    <div id="section">       
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
            <div class="control-entry">
                <label>选择到达目标：</label>
                <div class="control-input">
                    <input id="destination-location" type="text">
                </div>
                <div class="control-input2">
                	<input type="radio" name="Driving" value="Driving" onClick="Driving(this)" checked/> 驾车
                	<input type="radio" name="Walking" value="Walking" onClick="Walking(this)" checked/> 步行
                	<input type="radio" name="Riding" value="Riding" onClick="Riding(this)" checked/> 骑行
                	<input type="radio" name="Transfer" value="Transfer" onClick="Transfer(this)" checked/> 公交
                </div>
            </div>
        </div>
        <div id="transfer-panel"></div>
    </div>
    <script type="text/javascript" src="/uhouse/Uhouse/uhouse/Home/Public/js/APIAPIAPI.js"></script>
</body>
</html>
<?php }} ?>