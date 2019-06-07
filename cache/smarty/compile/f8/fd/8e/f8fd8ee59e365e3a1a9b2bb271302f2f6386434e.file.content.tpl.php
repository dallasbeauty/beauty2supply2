<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-04 12:26:03
         compiled from "/home/site/wwwroot/admin3945pw7m7/themes/default/template/controllers/modules/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10590936375cf69b9be20aa9-10292157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8fd8ee59e365e3a1a9b2bb271302f2f6386434e' => 
    array (
      0 => '/home/site/wwwroot/admin3945pw7m7/themes/default/template/controllers/modules/content.tpl',
      1 => 1559581721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10590936375cf69b9be20aa9-10292157',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf69b9be37964_99491339',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf69b9be37964_99491339')) {function content_5cf69b9be37964_99491339($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['module_content']->value)) {?>
	<?php echo $_smarty_tpl->tpl_vars['module_content']->value;?>

<?php } else { ?>
	<?php if (!isset($_GET['configure'])) {?>
		<?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/js.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?>
<?php }?>
<?php }} ?>
