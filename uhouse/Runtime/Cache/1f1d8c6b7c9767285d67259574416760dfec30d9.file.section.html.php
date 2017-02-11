<?php /* Smarty version Smarty-3.1.6, created on 2017-02-06 21:48:56
         compiled from "E:/wamp64/www/uhouse/Uhouse/uhouse/Home/View\Index\section.html" */ ?>
<?php /*%%SmartyHeaderCode:21074588dbb4957c609-33306010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f1d8c6b7c9767285d67259574416760dfec30d9' => 
    array (
      0 => 'E:/wamp64/www/uhouse/Uhouse/uhouse/Home/View\\Index\\section.html',
      1 => 1486388013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21074588dbb4957c609-33306010',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_588dbb49817b4',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588dbb49817b4')) {function content_588dbb49817b4($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width">
	<title>API_study</title>
	<link rel="stylesheet" type="text/css" href="http://cache.amap.com/lbs/static/main1119.css">
	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
			overflow-y: hidden;
		}
		
		#container {
			height: 100%;
			width: 100%;
			z-index: 0;
		}
		
		#calculator {
			display: none;
			height: 100%;
			width: 100%;
		}
		
		#tipinput {
			z-index: 1;
		}
	</style>
	<script type="text/javascript" src="http://cache.amap.com/lbs/static/es5.min.js"></script>
	<script type="text/javascript" src="http://webapi.amap.com/maps?v=1.3&key=5c263eb5e0bee0cf93225d78b281e0f3&plugin=AMap.Autocomplete"></script>
	<script type="text/javascript" src="http://cache.amap.com/lbs/static/addToolbar.js"></script>
</head>
<body>
	<div id="container"></div>
	<iframe id="calculator" src="<?php echo @__CONTROLLER__;?>
/calculator"></iframe>
	<script type="text/javascript" src="http://127.0.0.1:8088/uhouse/Uhouse/uhouse/home/public/js/map.js"></script>
</body>
</html>
<?php }} ?>