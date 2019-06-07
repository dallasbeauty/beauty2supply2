<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:53
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/loyalty/views/templates/hook/product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13179995925cf5585d211a50-45534384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13784871fb060a124868dbd3294d6bd394c109cf' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/loyalty/views/templates/hook/product.tpl',
      1 => 1559582120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13179995925cf5585d211a50-45534384',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'points' => 0,
    'total_points' => 0,
    'voucher' => 0,
    'no_pts_discounted' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf5585d240666_23451266',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5585d240666_23451266')) {function content_5cf5585d240666_23451266($_smarty_tpl) {?>
<p id="loyalty" class="align_justify">
  <?php if ($_smarty_tpl->tpl_vars['points']->value) {?>
    <?php echo smartyTranslate(array('s'=>'By buying this product you can collect up to','mod'=>'loyalty'),$_smarty_tpl);?>

    <b><span id="loyalty_points"><?php echo $_smarty_tpl->tpl_vars['points']->value;?>
</span>&nbsp;<?php if ($_smarty_tpl->tpl_vars['points']->value>1) {?><?php echo smartyTranslate(array('s'=>'loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'loyalty point','mod'=>'loyalty'),$_smarty_tpl);?>
<?php }?></b>.
    <?php echo smartyTranslate(array('s'=>'Your cart will total','mod'=>'loyalty'),$_smarty_tpl);?>

    <b><span id="total_loyalty_points"><?php echo $_smarty_tpl->tpl_vars['total_points']->value;?>
</span>
      <?php if ($_smarty_tpl->tpl_vars['total_points']->value>1) {?><?php echo smartyTranslate(array('s'=>'points','mod'=>'loyalty'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'point','mod'=>'loyalty'),$_smarty_tpl);?>
<?php }?></b>
    <?php echo smartyTranslate(array('s'=>'that can be converted into a voucher of','mod'=>'loyalty'),$_smarty_tpl);?>

    <span id="loyalty_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['voucher']->value),$_smarty_tpl);?>
</span>.
  <?php } else { ?>
    <?php if (isset($_smarty_tpl->tpl_vars['no_pts_discounted']->value)&&$_smarty_tpl->tpl_vars['no_pts_discounted']->value==1) {?>
      <?php echo smartyTranslate(array('s'=>'No reward points for this product because there\'s already a discount.','mod'=>'loyalty'),$_smarty_tpl);?>

    <?php } else { ?>
      <?php echo smartyTranslate(array('s'=>'No reward points for this product.','mod'=>'loyalty'),$_smarty_tpl);?>

    <?php }?>
  <?php }?>
</p>
<br class="clearfix">
<?php }} ?>
