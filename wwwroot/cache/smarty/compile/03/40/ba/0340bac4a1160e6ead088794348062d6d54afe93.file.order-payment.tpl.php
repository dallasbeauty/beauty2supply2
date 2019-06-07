<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:29:05
         compiled from "/home/site/wwwroot/themes/community-theme-default/order-payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15972541105cf558e19bc863-51966855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0340bac4a1160e6ead088794348062d6d54afe93' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/order-payment.tpl',
      1 => 1559580415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15972541105cf558e19bc863-51966855',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'opc' => 0,
    'empty' => 0,
    'PS_CATALOG_MODE' => 0,
    'productNumber' => 0,
    'advanced_payment_api' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf558e19e9357_83622466',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558e19e9357_83622466')) {function content_5cf558e19e9357_83622466($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['opc']->value) {?>
  <?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'txtProduct')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtProduct'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'product','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtProduct'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

  <?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'txtProducts')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtProducts'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'products','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtProducts'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

  <?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Your payment method'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
  <h1 class="page-heading"><?php echo smartyTranslate(array('s'=>'Please choose your payment method'),$_smarty_tpl);?>

    <?php if (!isset($_smarty_tpl->tpl_vars['empty']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
      <div class="pull-right">
        <span class="heading-counter badge"><?php echo smartyTranslate(array('s'=>'Your shopping cart contains:'),$_smarty_tpl);?>

          <span id="summary_products_quantity"><?php echo $_smarty_tpl->tpl_vars['productNumber']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['productNumber']->value==1) {?><?php echo smartyTranslate(array('s'=>'product'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'products'),$_smarty_tpl);?>
<?php }?></span>
        </span>
      </div>
    <?php }?>
  </h1>
<?php } else { ?>
  <h1 class="page-heading step-num"><span>3</span> <?php echo smartyTranslate(array('s'=>'Please choose your payment method'),$_smarty_tpl);?>
</h1>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['opc']->value) {?>
  <?php $_smarty_tpl->tpl_vars['current_step'] = new Smarty_variable('payment', null, 0);?>
  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
<div id="opc_payment_methods" class="opc-main-block">
  <div id="opc_payment_methods-overlay" class="opc-overlay" style="display: none;"></div>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['advanced_payment_api']->value) {?>
  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-payment-advanced.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php } else { ?>
  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-payment-classic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php }} ?>
