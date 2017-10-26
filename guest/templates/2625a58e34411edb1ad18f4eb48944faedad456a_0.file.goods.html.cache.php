<?php
/* Smarty version 3.1.31, created on 2017-10-26 10:22:17
  from "D:\wamp64\www\project\blog\template\index\goods.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59f1b7594bf5d6_85651170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2625a58e34411edb1ad18f4eb48944faedad456a' => 
    array (
      0 => 'D:\\wamp64\\www\\project\\blog\\template\\index\\goods.html',
      1 => 1509013335,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f1b7594bf5d6_85651170 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '988959f1b759448ff2_26600660';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
goods.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['iconfont']->value;?>
">
</head>
<body>
  <!-- cart-header start -->
  <table class="cart-header">
    <tbody>
      <tr>
        <th class="checkout"></th>
        <th class="cart-info">商品信息</th>
        <th class="cart-price">单价（元）</th>
        <th class="cart-picker">数量</th>
        <th class="cart-amount">小计（元）</th>
        <th class="cart-action"></th>
      </tr>
    </tbody>
  </table>
  <!-- cart-header end -->
  <div class="car-list">
    <ul>
      <li>
        <table class="basic">
          <tr>
            <td class="checkout">
              <span class="iconfont">&#xe649;</span>
            </td>
            <td class="cart-info">
              <a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
p2002202.jpg" alt=""></a>
              <div class="detail">
                <p>
                  <a href="">燃点—燃烧瓶</a>
                </p>
              </div>
            </td>
            <td class="cart-price">
              <span>￥19.00</span>
            </td>
            <td class="cart-picker">
              <div class="num">
                <span class="iconfont picker-button">&#xe632;</span>
                <span>2</span>
                <span class="iconfont picker-button">&#xe604;</span>
              </div>
            </td>
            <td class="cart-amount">
              <span>￥38.00</span>
            </td>
            <td class="cart-action">
              <button>删除</button>
            </td>
          </tr>
        </table>
      </li>
    </ul>
  </div>
</body>
</html><?php }
}
