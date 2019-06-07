<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:37
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/cheque/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15633172135cf5584d4619f0-21362766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84d714e601a7063145fef882beea5ad6342889bb' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/cheque/views/templates/hook/payment.tpl',
      1 => 1559582118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15633172135cf5584d4619f0-21362766',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf5584d479a35_32977831',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5584d479a35_32977831')) {function content_5cf5584d479a35_32977831($_smarty_tpl) {?><div class="row">
  <div class="col-xs-12">
    <p class="payment_module">
      <a class="cheque" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('cheque','payment',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by check.','mod'=>'cheque'),$_smarty_tpl);?>
">
        <?php echo smartyTranslate(array('s'=>'Pay by check','mod'=>'cheque'),$_smarty_tpl);?>
 <span><?php echo smartyTranslate(array('s'=>'(order processing will be longer)','mod'=>'cheque'),$_smarty_tpl);?>
</span>
      </a>
    </p>
  </div>
</div>
<?php }} ?>
