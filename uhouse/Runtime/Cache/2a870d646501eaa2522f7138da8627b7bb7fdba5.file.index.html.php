<?php /* Smarty version Smarty-3.1.6, created on 2015-09-01 15:19:01
         compiled from "E:/web/0710/shop/Admin/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:594255e424ced49c09-49979381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a870d646501eaa2522f7138da8627b7bb7fdba5' => 
    array (
      0 => 'E:/web/0710/shop/Admin/View\\Index\\index.html',
      1 => 1441091907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '594255e424ced49c09-49979381',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55e424cee0d23',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e424cee0d23')) {function content_55e424cee0d23($_smarty_tpl) {?><!doctype html public "-//w3c//dtd xhtml 1.0 frameset//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-frameset.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <meta http-equiv=pragma content=no-cache />
        <meta http-equiv=cache-control content=no-cache />
        <meta http-equiv=expires content=-1000 />
        
        <title>管理中心 v1.0</title>
    </head>
    <frameset border=0 framespacing=0 rows="60, *" frameborder=0>
        <!--
        以下frame框架的src属性值的设置不要使用相对路径，会收到路由的影响
        而要使用绝对路径(要设置独立路由地址)：
        /shop/index.php/Admin/Index/head
        /shop/index.php/Admin/Index/left
        /shop/index.php/Admin/Index/right
        -->
        <frame name=head src="<?php echo @__CONTROLLER__;?>
/head" frameborder=0 noresize scrolling=no />
            <frameset cols="170, *">
                <frame name=left src="<?php echo @__CONTROLLER__;?>
/left.html" frameborder=0 noresize />
                <frame name=right src="<?php echo @__CONTROLLER__;?>
/right.html" frameborder=0 noresize scrolling=yes />
            </frameset>
    </frameset>
    <noframes>
    </noframes>
</html><?php }} ?>