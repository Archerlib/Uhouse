<?php /* Smarty version Smarty-3.1.6, created on 2017-01-30 11:52:26
         compiled from "E:/wamp64/www/uhouse/Uhouse/uhouse/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:6836588db77aa56539-43487538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c86a45a4d73e4901d0774c2fa6cfc3325c430080' => 
    array (
      0 => 'E:/wamp64/www/uhouse/Uhouse/uhouse/Home/View\\Index\\index.html',
      1 => 1485748270,
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <title>UHouse</title>
    <style type="text/css">
		* {
			overflow-y: hidden;
		}
	</style>
</head>
<frameset rows="9%, 91%" border="0">
    <frame src="<?php echo @__CONTROLLER__;?>
/header.html" name="header">
        <frameset cols="75%, 25%" border="0">
            <frame src="<?php echo @__CONTROLLER__;?>
/section.html" name="section">
            <frame src="<?php echo @__CONTROLLER__;?>
/aside.html" name="aside">
        </frameset>
</frameset><noframes></noframes>
<body>
	<script type="text/javascript" src="<?php echo @JS_URL;?>
/mapChange.js"></script>
</body>
</html>
<?php }} ?>