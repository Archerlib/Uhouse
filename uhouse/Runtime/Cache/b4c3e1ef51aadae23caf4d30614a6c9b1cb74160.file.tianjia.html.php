<?php /* Smarty version Smarty-3.1.6, created on 2015-09-04 15:13:52
         compiled from "E:/web/0710/shop/Admin/View\Goods\tianjia.html" */ ?>
<?php /*%%SmartyHeaderCode:2025455e549121cc4f0-53771782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4c3e1ef51aadae23caf4d30614a6c9b1cb74160' => 
    array (
      0 => 'E:/web/0710/shop/Admin/View\\Goods\\tianjia.html',
      1 => 1441350724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2025455e549121cc4f0-53771782',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55e549123d210',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e549123d210')) {function content_55e549123d210($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加商品</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：商品管理-》添加商品信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/showlist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
                <tr><td>商品名称</td>
                    <td><input type="text" name="goods_name" /></td>
                </tr>
                <tr><td>商品价格</td>
                    <td><input type="text" name="goods_price" /></td>
                </tr>
                <tr><td>商品数量</td>
                    <td><input type="text" name="goods_number" /></td>
                </tr>
                <tr><td>商品重量</td>
                    <td><input type="text" name="goods_weight" /></td>
                </tr>
                <tr><td>商品图片</td>
                    <td><input type="file" name="goods_pic" /></td>
                </tr>
                <tr>
                    <td>商品详细描述</td>
                    <td>
                        <textarea name="goods_introduce"></textarea>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="添加">
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
</html><?php }} ?>