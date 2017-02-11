<?php /* Smarty version Smarty-3.1.6, created on 2017-02-06 22:18:44
         compiled from "E:/wamp64/www/uhouse/Uhouse/uhouse/Home/View\Index\header.html" */ ?>
<?php /*%%SmartyHeaderCode:31993588dbc5a849fe5-05445632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b74ce54e81868d26a9742175ec057ee28969210d' => 
    array (
      0 => 'E:/wamp64/www/uhouse/Uhouse/uhouse/Home/View\\Index\\header.html',
      1 => 1486390713,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31993588dbc5a849fe5-05445632',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_588dbc5b2c23e',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588dbc5b2c23e')) {function content_588dbc5b2c23e($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <title>header</title>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            height: 100%;
			overflow-y: hidden;
        }

        #logo-box {
            display: inline-block;
            float: left;
            height: 100%;
            width: 110px;
        }
		
		#logo-img {
			height: 70px;
			margin-top: 10px;
			margin-left: 10px;
		}

        #search-box {
            display: inline-block;
            float: left;
            height: 100%;
            width: 220px;
        }
		
		#search-text {
			height: 20px;
			margin-top: 35px;
			width: 200px;
			margin-left: 9px;
		}

        #demand-box {
            display: inline-block;
            float: left;
            height: 100%;
            width:30%;
            width: 576px;
        }
		
		.demand-box-box {
			display: inline-block;
			height: 90px;
			width: 192px;
			margin-left: -5px;
		}
		
		.demand-text {
			display: inline-block;
			height: 20px;
			width: 62px;
			margin-top: 35px;
			font-size: 15px;
		}
		
		.demand-option {
			position: absolute;
			display: inline-block;
			height: 20px;
			width: 130px;
			margin-top: 35px;
		}
		
        #trans-box {
            display: inline-block;
            float: left;
            height: 100%;
        }

		#trans-list {
			height: 20px;
			width: 100%;
			margin-top: 8px;
			border-bottom: 2px solid #8B4513;
		}
		
		#trans-list li {
			display: inline-block;
			width: 58px;
			text-align: center;
			margin-left: auto;
			border: 1px solid #999;
			border-bottom: none;
		}
		
		#trans-list:hover {
			cursor: pointer;
		}
		
		.trans-active {
			border-top: 2px solid #8B4513;
			border-bottom: 2px solid #FFF; 
		}
		
		#trans-box div {
			border: 1px solid #7396B8;
			border-top: none;
			height: 40px;
		}
		
		.trans-show {
			display: block;
		}
		
		.trans-hide {
			display: none;
		}
		
		.trans-path-text {
			height: 18px;
			width: 200px;
			margin-top: 9px;
			margin-left: 26px;
			font-size: 16px;
		}
		
        #change-box {
            display: inline-block;
            float: left;
            height: 100%;
            width: 130px;
        }
		
		#change-button {
			height: 26px;
			width: 106px;
			margin-top: 32px;
			margin-left: 12px;
		}
    </style>
    <script type="text/javascript">
		window.onload = function() {
			var oUl = document.getElementById('trans-list');
			var aLi = oUl.getElementsByTagName('li');
			var oDiv = document.getElementById('trans-box');
			var aDiv = oDiv.getElementsByTagName('div');
			for (var i = 0; i < aLi.length; i++) {
				aLi[i].index = i;
				aLi[i].onmouseover = function() {
					for (var i = 0; i < aLi.length; i++) {
						aLi[i].className = "";
					}
					this.className = "trans-active";
					for (var j = 0; j < aDiv.length; j++) {
						aDiv[j].className = "trans-hide";
					}
					aDiv[this.index].className = "trans-show";
				}
			}
		}
	</script>
</head>
<body>
    <div id="logo-box">
    	<img src="UHouse.jpg" height="70" id="logo-img">
    </div>
    <div id="search-box">
    	<input type="text" id="search-text" placeholder="请输入关键词进行搜索">
    </div>
    <div id="demand-box">
    	<div class="demand-box-box">
    		<p align="center" class="demand-text">租金：</p>
    		<select class="demand-option" size="1">
    			<option value="price-A" selected="selected">不限</option>
    			<option value="price-B">1000-2000元</option>
    			<option value="price-C">2000-4000元</option>
    			<option value="price-D">4000-6000元</option>
    			<option value="price-E">6000-8000元</option>
    			<option value="price-F">8000-12000元</option>
    			<option value="price-G">12000元以上</option>
    		</select>
    	</div>
    	<div class="demand-box-box">
    		<p align="center" class="demand-text">面积：</p>
    		<select class="demand-option" size="1">
    			<option value="area-A" selected="selected">不限</option>
    			<option value="area-B">50平以下</option>
    			<option value="area-C">50-70平</option>
    			<option value="area-D">70-90平</option>
    			<option value="area-E">90-110平</option>
    			<option value="area-F">110-150平</option>
    			<option value="area-G">150平以上</option>
    		</select>
    	</div>

    </div>

</body>
</html>
<?php }} ?>