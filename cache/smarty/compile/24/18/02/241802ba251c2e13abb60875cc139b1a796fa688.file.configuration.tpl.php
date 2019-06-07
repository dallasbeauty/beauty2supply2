<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:26:36
         compiled from "/home/site/wwwroot/themes/community-theme-default/modules/carriercompare/template/configuration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10334590425cf5584cd4fdb6-38655688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '241802ba251c2e13abb60875cc139b1a796fa688' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/modules/carriercompare/template/configuration.tpl',
      1 => 1559581315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10334590425cf5584cd4fdb6-38655688',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_error' => 0,
    'refresh_method' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf5584cd89ac7_20703103',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5584cd89ac7_20703103')) {function content_5cf5584cd89ac7_20703103($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['display_error']->value)) {?>
  <?php if ($_smarty_tpl->tpl_vars['display_error']->value) {?>
    <div class="error"><?php echo smartyTranslate(array('s'=>'An error occurred during form validation.','mod'=>'carriercompare'),$_smarty_tpl);?>
</div>
  <?php } else { ?>
    <div class="conf"><?php echo smartyTranslate(array('s'=>'Configuration updated','mod'=>'carriercompare'),$_smarty_tpl);?>
</div>
  <?php }?>
<?php }?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8', true);?>
">
  <fieldset>
    <div class="warn">
      <?php echo smartyTranslate(array('s'=>'This module is only available during the standard five-step checkout process. The carrier list has already been defined for one-page checkout.','mod'=>'carriercompare'),$_smarty_tpl);?>

    </div>
    <legend><?php echo smartyTranslate(array('s'=>'Global Configuration','mod'=>'carriercompare'),$_smarty_tpl);?>
</legend>

    <label for="refresh_method">Refresh carrier list method</label>
    <div class="margin-form">
      <select id="refresh_method" name="refresh_method">
        <option value="0" <?php if ($_smarty_tpl->tpl_vars['refresh_method']->value==0) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'Anytime','mod'=>'carriercompare'),$_smarty_tpl);?>
</option>
        <option value="1" <?php if ($_smarty_tpl->tpl_vars['refresh_method']->value==1) {?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'The required information is set.','mod'=>'carriercompare'),$_smarty_tpl);?>
</option>
      </select>
      <p><?php echo smartyTranslate(array('s'=>'How would you like to refresh information for a customer?','mod'=>'carriercompare'),$_smarty_tpl);?>
</p>
    </div>

    <div class="margin-form">
      <input name="setGlobalConfiguration" type="submit" class="btn btn-success" value="<?php echo smartyTranslate(array('s'=>'Submit','mod'=>'carriercompare'),$_smarty_tpl);?>
">
    </div>
  </fieldset>
</form>
<?php }} ?>
