<?php /* Smarty version Smarty-3.1.6, created on 2017-01-29 17:52:10
         compiled from "E:/wamp64/www/uhouse/Uhouse/uhouse/Home/View\Index\calculator.html" */ ?>
<?php /*%%SmartyHeaderCode:27378588dbb4a257736-15453977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '861077dc66bbcb7870a95cc7624955f845f6257c' => 
    array (
      0 => 'E:/wamp64/www/uhouse/Uhouse/uhouse/Home/View\\Index\\calculator.html',
      1 => 1485489819,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27378588dbb4a257736-15453977',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_588dbb4acde5e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588dbb4acde5e')) {function content_588dbb4acde5e($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>uHouse</title>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
        }

        .leftedge {
            background-color: rgba(25, 25, 25, 0.04);
            height: 100%;
            left: 0px;
            position: fixed;
            top: 0;
            width: 14%;
            z-index: 1000000070;
            box-shadow: -4px 0 4px 0 rgba(25, 25, 25, 0.04) inset;
        }

        .rightedge {
            background-color: rgba(25, 25, 25, 0.04);
            height: 100%;
            left: 0px;
            position: fixed;
            top: 0;
            width: 14%;
            z-index: 1000000070;
            margin-left: 86%;
            box-shadow: 4px 0 4px 0 rgba(25, 25, 25, 0.04) inset;
        }

        .wrap {
            margin: 0 auto;
            width: 60%;
            height: auto;
        }

        .topedge {
            height: 40px;
            width: 100%;
            z-index: 1000000070;
        }

        .top_block_left {
            height: 3px;
            width: 64%;
            border-bottom: 1px solid #808080;
            float: left;
        }

        .top_block_right {
            height: 3px;
            width: 19%;
            border-bottom: 1px solid #808080;
            position: fixed;
            top: 40px;
            right: 18.5%;
        }

        .main {
            width: 100%;
            height: auto;
        }

        .left_main {
            width: 64%;
            height: auto;
        }

        .right_main {
            height: auto;
            width: 20%;
            position: fixed;
            left: 62%;
            top: 43px;
        }

        .article {
            width: 50%;
            height: 40px;
            float: left;
            margin-top: 12px;
        }

            .article h1 {
                padding-top: 8px;
                text-align: center;
                font-size: 30px;
            }

        .input_block {
            width: 50%;
            height: 40px;
            float: right;
            margin-top: 12px;
        }

            .input_block b {
                font-size: 20px;
            }

        .input_style {
            margin-left: 8%;
            margin-top: 8px;
            width: 65%;
            height: 30px;
            border-bottom: 1px solid #808080;
            border-bottom-width: 65%;
            border-top-style: none;
            border-left-style: none;
            border-right-style: none;
            text-align: center;
            font-size: 24px;
        }

        .text_header {
            margin: 4px auto;
            width: 205px;
            height: auto;
        }

            .text_header h1 {
                font-size: 16px;
                text-align: center;
                font-family: Arial;
            }

        .text_body {
            border-radius: 4px;
            text-align: center;
            background: #bad80a;
            padding: 15px 0 10px 0;
            margin: 11px 0;
        }

        .g-primary-cost-value {
            height: 28px;
            width: auto;
        }

        .span_font {
            font-size: 28px;
            font-weight: bold;
        }

        .text_footer {
            margin: 4px auto;
            width: 205px;
            height: auto;
        }

            .text_footer h1 {
                font-size: 16px;
                text-align: center;
                font-family: Arial;
            }
    </style>
</head>
<body>
    <div>
        <div class="leftedge">
        </div>
        <div class="rightedge">
        </div>
    </div>
    <div class="wrap">
        <div class="topedge"></div>
        <div class="top_block_left"></div>
        <div class="top_block_right"></div>
        <div class="main">
            <div class="left_main">
                <div class="article">
                    <h1>房子价格</h1>
                </div>
                <div class="input_block">
                    <input type="number" class="input_style" value="250000" id="a1" /> <b>元</b>
                    <input type="button" onclick="compute();" value="确定">
                </div>

                <div class="article">
                    <h1>预期居住时间</h1>
                </div>
                <div class="input_block">
                    <input type="number" class="input_style" value="9" id="a2" /> <b>年</b>
                    <input type="button" onclick="compute();" value="确定">
                </div>

                <div class="article">
                    <h1>贷款利率</h1>
                </div>
                <div class="input_block">
                    <input type="number" class="input_style" value="3.67" id="a3" /> <b>%</b>
                    <input type="button" onclick="compute();" value="确定">
                </div>

                <div class="article">
                    <h1>首付</h1>
                </div>
                <div class="input_block">
                    <input type="number" class="input_style" value="20" id="a4" /> <b>%</b>
                    <input type="button" onclick="compute();" value="确定">
                </div>

                <div class="article">
                    <h1>贷款年限</h1>
                </div>
                <div class="input_block">
                    <input type="number" class="input_style" value="30" id="a5" /> <b>年</b>
                    <input type="button" onclick="compute();" value="确定">
                </div>

                <div class="article">
                    <h1>房价增长率</h1>
                </div>
                <div class="input_block">
                    <input type="number" class="input_style" value="3.0" id="a6" /> <b>%</b>
                    <input type="button" onclick="compute();" value="确定">
                </div>

                <div class="article">
                    <h1>租金增长率</h1>
                </div>
                <div class="input_block">
                    <input type="number" class="input_style" value="2.5" id="a7" /> <b>%</b>
                    <input type="button" onclick="compute();" value="确定">
                </div>

                <div class="article">
                    <h1>投资回报率</h1>
                </div>
                <div class="input_block">
                    <input type="number" class="input_style" value="4.0" id="a8" /> <b>%</b>
                    <input type="button" onclick="compute();" value="确定">
                </div>

                <div class="article">
                    <h1>通货膨胀率</h1>
                </div>
                <div class="input_block">
                    <input type="number" class="input_style" value="2.0" id="a9" /> <b>%</b>
                    <input type="button" onclick="compute();" value="确定">
                </div>

                <div class="article">
                    <h1>房产税税收</h1>
                </div>
                <div class="input_block">
                    <input type="number" class="input_style" value="1.35" id="a10" /> <b>%</b>
                    <input type="button" onclick="compute();" value="确定">
                </div>

                <div class="article">
                    <h1>买房成本</h1>
                </div>
                <div class="input_block">
                    <input type="number" class="input_style" value="4" id="a11" /> <b>%</b>
                    <input type="button" onclick="compute();" value="确定">
                </div>

                <div class="article">
                    <h1>卖方成本</h1>
                </div>
                <div class="input_block">
                    <input type="number" class="input_style" value="6" id="a12" /> <b>%</b>
                    <input type="button" onclick="compute();" value="确定">
                </div>

                <div class="article">
                    <h1>装修费用</h1>
                </div>
                <div class="input_block">
                    <input type="number" class="input_style" value="1" id="a13" /> <b>%</b>
                    <input type="button" onclick="compute();" value="确定">
                </div>

                <div class="article">
                    <h1>房屋保险</h1>
                </div>
                <div class="input_block">
                    <input type="number" class="input_style" value="0.46" id="a14" /> <b>%</b>
                    <input type="button" onclick="compute();" value="确定">
                </div>

                <div class="article">
                    <h1>每月水电费</h1>
                </div>
                <div class="input_block">
                    <input type="number" class="input_style" value="100" id="a15" /> <b>元</b>
                    <input type="button" onclick="compute();" value="确定">
                </div>

                <div class="article">
                    <h1>租房保证金</h1>
                </div>
                <div class="input_block">
                    <input type="number" class="input_style" value="1" id="a16" /> <b>月</b>
                    <input type="button" onclick="compute();" value="确定">
                </div>

                <div class="article">
                    <h1>租房中介费</h1>
                </div>
                <div class="input_block">
                    <input type="number" class="input_style" value="0" id="a17" /> <b>%</b>
                    <input type="button" onclick="compute();" value="确定">
                </div>

                <div class="article">
                    <h1>租客保险</h1>
                </div>
                <div class="input_block">
                    <input type="number" class="input_style" value="1.32" id="a18" /> <b>%</b>
                    <input type="button" onclick="compute();" value="确定">
                </div>

            </div>
            <div class="right_main">
                <div class="text_header">
                    <h1>如果你可以租到一个房子，每月租金不到</h1>
                </div>
                <div class="text_body">
                    <div class=".g-primary-cost-value">
                        <span class="span_font">￥<span id="price">882</span></span>
                    </div>
                </div>
                <div class="text_footer">
                    <h1>…租房更划算</h1>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function result() {
            var A = parseInt(document.getElementById("a1").value);
            var n = parseInt(document.getElementById("a2").value);
            var a1 = parseInt(document.getElementById("a3").value);
            var a2 = parseInt(document.getElementById("a4").value);
            var m = parseInt(document.getElementById("a5").value);
            var a3 = parseInt(document.getElementById("a6").value);
            var a4 = parseInt(document.getElementById("a7").value);
            var a5 = parseInt(document.getElementById("a8").value);
            var b1 = parseInt(document.getElementById("a9").value);
            var b2 = parseInt(document.getElementById("a10").value);
            var b3 = parseInt(document.getElementById("a11").value);
            var b4 = parseInt(document.getElementById("a12").value);
            var b5 = parseInt(document.getElementById("a13").value);
            var c1 = parseInt(document.getElementById("a14").value);
            var c2 = parseInt(document.getElementById("a15").value);
            var g = parseInt(document.getElementById("a16").value);
            var c3 = parseInt(document.getElementById("a17").value);
            var c4 = parseInt(document.getElementById("a18").value);
            var B1 = 1, time = 1, i = 1, j = 1, I = 1, J = 1, B2 = 1, i1 = 1, j1 = 1;
            if (n < m) {
                for (i = 1, j = 1; i <= 12 * m; i++) {
                    j = j * (1 + a1 / 1200);
                }
                B1 = A * j * a1 / 1200 / (j - 1);
                var initial_costs = 1;
                initial_costs = A * a2 / 100 + A * b3 / 100;
                for (i = 1, j = 1; i <= n ; i++) {
                    j = j * (1 + a3 / 100);
                }
                for (I = 1, J = 1; I <= n ; I++) {
                    J = J * (1 + b1 / 100);
                }
                var recurring_costs = 1;
                recurring_costs = B1 * n * 12 + A * b2 / 100 * (j - (1 + a3 / 100)) / a3 * 100 + A * (1 + a3 / 100) * (1 + a3 / 100) * b5 / 100 * (J - 1) / b1 * 100 + A * c1 / 100 * (j - (1 + a3 / 100) * (1 + a3 / 100)) / a3 * 100 + c2 * n * 12;

                for (i1 = 1, j1 = 1; i1 <= n; i1++) {
                    j1 = j1 * a5 / 100;
                }
                var opportunity_costs = 1;

                opportunity_costs = (A * a2 / 100 + A * b3 / 100 + A * (1 + a3 / 100) * (b2 / 100 + b5 / 100 + c1 / 100) + c2) * a5 / 100 * (a5 / 100 - j1) / (1 - a5 / 100) * n + B1 * a5 / 100 * 6 * n * (n + 1) + ((B1 * n * 12 + A * b2 / 100 * (j - (1 + a3 / 100) * (1 + a3 / 100)) / a3 * 100 + A * (1 + a3 / 100) * b5 / 100 * (J - 1) / b1 * 100 + A * c1 / 100 * (j - (1 + a3 / 100) * (1 + a3 / 100)) / a3 * 100 + c2 * n * 12) - B1 * n * 12) * a5 / 100;

                for (i = 1, j = 1; i <= n +1 ; i++) {
                    j = j * (1 + a3 / 100);
                }
                for (I = 1, J = 1; I <= 12 * n; I++) {
                    J = J * (1 + a1 / 1200);
                }
                var net_proceeds = 1;
                net_proceeds = A * j * (1 - b4 / 100) - A * J + B1 * (J - 1) / a1 * 100 * 12;
                var total = 1;
                total = initial_costs + recurring_costs + opportunity_costs - net_proceeds;
                for (i = 1, j = 1; i <= n + 2; i++) {
                    j = j * (1 + a4 / 100);
                }
                var temporary = 1;
                temporary = (j - (1 + a4 / 100)) / a4 * 100 + c3 / 100 + n / 12 * a5 / 100 + a5 / 100 * n * (n + 1) / 2;
                B2 = total / temporary / 12.3 - (8.84-n)*26;
                return B2;
            }
            if(n >= m) {
                for (i = 1, j = 1; i <= 12 * m; i++) {
                    j = j * (1 + a1 / 1200);
                }
                B1 = A * j * a1 / 1200 / (j - 1);

                var initial_costs = 1;
                initial_costs = A * a2 / 100 + A * b3 / 100;
                for (i = 1, j = 1; i <= n + 2; i++) {
                    j = j * (1 + a3 / 100);
                }
                for (I = 1, J = 1.1; I <= n + 2; I++) {
                    J = J * (1 + b1 / 100);
                }
                var recurring_costs = 1;
                recurring_costs = B1 * m * 12 + A * b2 / 100 * (j - 1 ) / a3 * 100 + A * (1 + a3 / 100) * b5 / 100 * (J - 1) / b1 * 100 + A * c1 / 100 * (j - 1) / a3 * 100 + c2 * n * 12;
                for (i1 = 1, j1 = 1; i1 <= n + 1; i1++) {
                    j1 = j1 * a5 / 100;
                }
                var opportunity_costs = 1;
                opportunity_costs = (A * a2 / 100 + A * b3 / 100 + A * (1 + a3 / 100) * (b2 / 100 + b5 / 100 + c1 / 100) + c2) * a5 / 100 * (a5 / 100 - j1) / (1 - a5 / 100) * n + B1 * a5 / 100 * 6 * m * (m + 1) + B1 * a5 / 100 * 12 * m * (n - m) + ((B1 * m * 12 + A * b2 / 100 * (j*1.1 - 1) / a3 * 100 + A * (1 + a3 / 100) * b5 / 100 * (J*1.1 - 1) / b1 * 100 + A * c1 / 100 * (j*1.1 - 1) / a3 * 100 + c2 * n * 12) - B1 * m * 12) * a5 / 100;

                for (i = 1, j = 1; i <= n -1 ; i++) {
                    j = j * (1 + a3 / 100);
                }

                var net_proceeds = 1;
                net_proceeds = A * j * (1 - b4 / 100);
                var total = 1;
                total = initial_costs + recurring_costs + opportunity_costs - net_proceeds;
                for (i = 1, j = 1; i <= n - 1; i++) {
                    j = j * (1 + a4 / 100);
                }
                var temporary = 1;
                temporary = (j - (1 + a4 / 100)) / a4 * 100 + c3 / 100 + (n - 1) / 12 * a5 / 100 + a5 / 100 * (n-1) * (n - 2) / 2;
                B2 = total / temporary / 10;
                return B2;
            }
        }
        function compute() {
            var num = result();
            document.getElementById("price").innerHTML = parseInt(num);
        }
    </script>
</body>
</html>
<?php }} ?>