<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:29:05
         compiled from "/home/site/wwwroot/admin/themes/default/template/helpers/list/list_action_enable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17489799535cf558e19fff19-48048135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5b74df9ef02ae544e730ee511701aa95f0e6a8d' => 
    array (
      0 => '/home/site/wwwroot/admin/themes/default/template/helpers/list/list_action_enable.tpl',
      1 => 1559581736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17489799535cf558e19fff19-48048135',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ajax' => 0,
    'enabled' => 0,
    'url_enable' => 0,
    'confirm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf558e1a23010_93539652',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558e1a23010_93539652')) {function content_5cf558e1a23010_93539652($_smarty_tpl) {?>
<a class="list-action-enable<?php if (isset($_smarty_tpl->tpl_vars['ajax']->value)&&$_smarty_tpl->tpl_vars['ajax']->value) {?> ajax_table_link<?php }?><?php if ($_smarty_tpl->tpl_vars['enabled']->value) {?> action-enabled<?php } else { ?> action-disabled<?php }?>" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_enable']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
');"<?php }?> title="<?php if ($_smarty_tpl->tpl_vars['enabled']->value) {?><?php echo smartyTranslate(array('s'=>'Enabled'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Disabled'),$_smarty_tpl);?>
<?php }?>">
	<i class="icon-check<?php if (!$_smarty_tpl->tpl_vars['enabled']->value) {?> hidden<?php }?>"></i>
	<i class="icon-remove<?php if ($_smarty_tpl->tpl_vars['enabled']->value) {?> hidden<?php }?>"></i>
</a>
<?php }} ?>
