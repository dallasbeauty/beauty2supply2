<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:37
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/cashondelivery/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:249884035cf5584d1453a1-81011658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f53e2f121efcf46674580deff06f7f544b8e4d21' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/cashondelivery/views/templates/hook/payment.tpl',
      1 => 1559582117,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '249884035cf5584d1453a1-81011658',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf5584d15ad27_92793200',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5584d15ad27_92793200')) {function content_5cf5584d15ad27_92793200($_smarty_tpl) {?><div class="row">
  <div class="col-xs-12">
    <p class="payment_module">
      <a class="cash" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('cashondelivery','validation',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay with cash on delivery (COD)','mod'=>'cashondelivery'),$_smarty_tpl);?>
" rel="nofollow">
        <?php echo smartyTranslate(array('s'=>'Pay with cash on delivery (COD)','mod'=>'cashondelivery'),$_smarty_tpl);?>

        <span>(<?php echo smartyTranslate(array('s'=>'You pay for the merchandise upon delivery','mod'=>'cashondelivery'),$_smarty_tpl);?>
)</span>
      </a>
    </p>
  </div>
</div>
<?php }} ?>
