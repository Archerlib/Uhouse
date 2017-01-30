<?php /* Smarty version Smarty-3.1.6, created on 2017-01-30 19:29:45
         compiled from "E:/wamp64/www/uhouse/Uhouse/uhouse/Home/View\Index\aside.html" */ ?>
<?php /*%%SmartyHeaderCode:21062588dbb49a81269-01033458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd88b83afe92c14238321fb3f3d6877e4675a2ff' => 
    array (
      0 => 'E:/wamp64/www/uhouse/Uhouse/uhouse/Home/View\\Index\\aside.html',
      1 => 1485775780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21062588dbb49a81269-01033458',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_588dbb49eb00e',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588dbb49eb00e')) {function content_588dbb49eb00e($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <title>aside</title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
			overflow-x: hidden;
			overflow-y: auto;
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
			font-size: 18px;
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
    <div id="list-box">
        <div class="list-title">
            <p align="center" class="list-title-text"></p>
        </div>
        <div class="list-info">
             <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <p align="center" class="list-info-info">总价：<?php echo $_smarty_tpl->tpl_vars['v']->value['condo_price'];?>
</p>
            <p align="center" class="list-info-info">面积：<?php echo $_smarty_tpl->tpl_vars['v']->value['condo_area'];?>
</p>
            <p align="center" class="list-info-info">户型：<?php echo $_smarty_tpl->tpl_vars['v']->value['condo_type'];?>
</p>
            <p align="center" class="list-info-info">小区：<?php echo $_smarty_tpl->tpl_vars['v']->value['housing'];?>
</p>
            <p align="center" class="list-info-info">位置：<?php echo $_smarty_tpl->tpl_vars['v']->value['condo_loc'];?>
</p>
            <?php } ?>
        </div>
        <div class="list-img">
        	<img src="http://127.0.0.1:8088/uhouse/Uhouse/uhouse/home/public/img/house1.jpg" width="336px" height="180px">
        </div>
    </div>
</body>
</html>
<?php }} ?>