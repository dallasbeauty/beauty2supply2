<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:29:05
         compiled from "/home/site/wwwroot/admin/themes/default/template/helpers/list/list_action_transferstock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9803982995cf558e1f31604-04024619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '021a9206543eb25f6214177cd6a98d51c4df0b50' => 
    array (
      0 => '/home/site/wwwroot/admin/themes/default/template/helpers/list/list_action_transferstock.tpl',
      1 => 1559581736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9803982995cf558e1f31604-04024619',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf558e2002b16_15442435',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558e2002b16_15442435')) {function content_5cf558e2002b16_15442435($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-exchange"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
