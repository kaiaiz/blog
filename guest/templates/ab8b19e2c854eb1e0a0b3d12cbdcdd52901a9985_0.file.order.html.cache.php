<?php
/* Smarty version 3.1.31, created on 2017-10-26 10:19:30
  from "D:\wamp64\www\project\blog\template\index\order.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59f1b6b27b8c13_81327440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab8b19e2c854eb1e0a0b3d12cbdcdd52901a9985' => 
    array (
      0 => 'D:\\wamp64\\www\\project\\blog\\template\\index\\order.html',
      1 => 1509012929,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template/index/header.html' => 1,
  ),
),false)) {
function content_59f1b6b27b8c13_81327440 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2468959f1b6b277f531_01130965';
$_smarty_tpl->_subTemplateRender('file:template/index/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- 购书单 -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
order.css">
<!-- market start -->
<div class="market">
  <main class="content">
    <div class="header">
      <h2>购物车</h2>
    </div>
    <div class="section">
      <ul>
        <li>
          <a href="" target="goods" class="active">全部商品
            <span>(1)</span>
          </a>
        </li>
      </ul>
      <div class="list">
        <iframe src="index.php?m=index&f=goods" frameborder="0" name="goods"></iframe>
      </div>
    </div>
  </main>
</div>
<!-- market end -->
<!-- cart-fixed start -->
<div class="cart-fixed">
  <main class="conten">
    <div class="cart-footer">
      <div class="action">
        <label for="">
          <span class="iconfont checkbox">&#xe649;</span>
          <span>全选</span>
        </label>
      </div>
      <div class="info"></div>
    </div>
  </main>
</div>
<!-- cart-fixed end -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
order.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
