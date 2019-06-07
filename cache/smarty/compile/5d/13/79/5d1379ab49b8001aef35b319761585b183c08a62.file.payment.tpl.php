<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:32
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/bankwire/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13298821085cf55848a723b9-27056130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d1379ab49b8001aef35b319761585b183c08a62' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/bankwire/views/templates/hook/payment.tpl',
      1 => 1559582116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13298821085cf55848a723b9-27056130',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf55848a80b06_88950510',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf55848a80b06_88950510')) {function content_5cf55848a80b06_88950510($_smarty_tpl) {?><div class="row">
  <div class="col-xs-12">
    <p class="payment_module">
      <a class="bankwire" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('bankwire','payment'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
">
        <?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
 <span><?php echo smartyTranslate(array('s'=>'(order processing will be longer)','mod'=>'bankwire'),$_smarty_tpl);?>
</span>
      </a>
    </p>
  </div>
</div>
<?php }} ?>
