<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:34
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/blockcustomerprivacy/blockcustomerprivacy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8756109625cf5584a2ee3a0-16212891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e192d917c5f529d0f81da9b53229104223121be' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/blockcustomerprivacy/blockcustomerprivacy.tpl',
      1 => 1559580865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8756109625cf5584a2ee3a0-16212891',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'privacy_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf5584a306769_92323850',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5584a306769_92323850')) {function content_5cf5584a306769_92323850($_smarty_tpl) {?><div class="error_customerprivacy" style="color:red;"></div>
<fieldset class="account_creation customerprivacy">
  <h3 class="page-subheading">
    <?php echo smartyTranslate(array('s'=>'Customer data privacy','mod'=>'blockcustomerprivacy'),$_smarty_tpl);?>

  </h3>
  <div class="required checkbox">
    <label for="customer_privacy" style="font-weight: normal;">
      <input type="checkbox" value="1" id="customer_privacy" name="customer_privacy" autocomplete="off">
      <?php echo $_smarty_tpl->tpl_vars['privacy_message']->value;?>

    </label>
  </div>
</fieldset>
<?php }} ?>
