<?php /* Smarty version Smarty-3.1.6, created on 2015-09-04 14:50:04
         compiled from "E:/web/0710/shop/Admin/View\Manager\login.html" */ ?>
<?php /*%%SmartyHeaderCode:907855e9123d88dcc9-61473920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adf5dd8b88e8020a82de1e696df32d810a466b25' => 
    array (
      0 => 'E:/web/0710/shop/Admin/View\\Manager\\login.html',
      1 => 1441349335,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '907855e9123d88dcc9-61473920',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55e9123db3136',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e9123db3136')) {function content_55e9123db3136($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta content="MSHTML 6.00.6000.16674" name="GENERATOR" />

        <title>用户登录</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
User_Login.css" type="text/css" rel="stylesheet" />
    </head>
    <body id="userlogin_body">
        <div></div>
        <div id="user_login">
            <dl>
                <dd id="user_top">
                    <ul>
                        <li class="user_top_l"></li>
                        <li class="user_top_c"></li>
                        <li class="user_top_r"></li></ul>
                </dd><dd id="user_main">
                    <form action="<?php echo @__SELF__;?>
" method="post">
                        <ul>
                            <li class="user_main_l"></li>
                            <li class="user_main_c">
                                <div class="user_main_box">
<ul>
    <li class="user_main_text">用户名： </li>
    <li class="user_main_input">
        <input class="TxtUserNameCssClass" id="admin_user" maxlength="20" name="admin_user"> </li></ul>
<ul>
    <li class="user_main_text">密&nbsp;&nbsp;&nbsp;&nbsp;码： </li>
    <li class="user_main_input">
        <input class="TxtPasswordCssClass" id="admin_psd" name="admin_psd" type="password">
    </li>
</ul>
<ul>
    <li class="user_main_text">验证码： </li>
    <li class="user_main_input">
        <input class="TxtValidateCodeCssClass" id="captcha" name="captcha" type="text">
        <img src="<?php echo @__CONTROLLER__;?>
/verifyImg"  alt="" 
             onclick="this.src='<?php echo @__CONTROLLER__;?>
/verifyImg/'+Math.random()"
             />
    </li>
</ul>
                                </div>
                            </li>
                            <li class="user_main_r">

                                <input style="border: medium none; background: url('<?php echo @ADMIN_IMG_URL;?>
user_botton.gif') repeat-x scroll left top transparent; height: 122px; width: 111px; display: block; cursor: pointer;" value="" type="submit">
                            </li>
                        </ul>
                    </form>
                </dd><dd id="user_bottom">
                    <ul>
                        <li class="user_bottom_l"></li>
                        <li class="user_bottom_c"><span style="margin-top: 40px;"></span> </li>
                        <li class="user_bottom_r"></li></ul></dd></dl></div><span id="ValrUserName" style="display: none; color: red;"></span><span id="ValrPassword" style="display: none; color: red;"></span><span id="ValrValidateCode" style="display: none; color: red;"></span>
        <div id="ValidationSummary1" style="display: none; color: red;"></div>
    </body>
</html><?php }} ?>