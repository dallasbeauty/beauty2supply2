<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:37
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/cheque/views/templates/hook/infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1986551385cf5584d337121-84325549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '516d9d618aabf26f9b3f4e2bd1d7ee5a9d7df814' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/cheque/views/templates/hook/infos.tpl',
      1 => 1559582118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1986551385cf5584d337121-84325549',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf5584d370202_16937377',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5584d370202_16937377')) {function content_5cf5584d370202_16937377($_smarty_tpl) {?><div class="alert alert-info">
  <img src="../modules/cheque/cheque.jpg" style="float:left; margin-right:15px;" width="86" height="49">
  <p><strong><?php echo smartyTranslate(array('s'=>"This module allows you to accept payments by check.",'mod'=>'cheque'),$_smarty_tpl);?>
</strong></p>
  <p><?php echo smartyTranslate(array('s'=>"If the client chooses this payment method, the order status will change to 'Waiting for payment.'",'mod'=>'cheque'),$_smarty_tpl);?>
</p>
  <p><?php echo smartyTranslate(array('s'=>"You will need to manually confirm the order as soon as you receive a check.",'mod'=>'cheque'),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>
