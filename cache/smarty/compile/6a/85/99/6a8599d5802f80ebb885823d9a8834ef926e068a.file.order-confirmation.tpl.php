<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:29:01
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/referralprogram/views/templates/hook/order-confirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7570753735cf558ddafd723-54692534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a8599d5802f80ebb885823d9a8834ef926e068a' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/referralprogram/views/templates/hook/order-confirmation.tpl',
      1 => 1559582122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7570753735cf558ddafd723-54692534',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sponsor_firstname' => 0,
    'sponsor_lastname' => 0,
    'discount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf558ddb0f858_05164963',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558ddb0f858_05164963')) {function content_5cf558ddb0f858_05164963($_smarty_tpl) {?><p class="success">
  <?php echo smartyTranslate(array('s'=>'Thanks to your order, your sponsor %1$s %2$s will earn a voucher worth %3$d off when this order is confirmed.','sprintf'=>array($_smarty_tpl->tpl_vars['sponsor_firstname']->value,$_smarty_tpl->tpl_vars['sponsor_lastname']->value,$_smarty_tpl->tpl_vars['discount']->value),'mod'=>'referralprogram'),$_smarty_tpl);?>

</p>
<br>
<?php }} ?>
