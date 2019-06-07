<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-04 15:15:50
         compiled from "/home/site/wwwroot/admin3945pw7m7/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12234704565cf6c36649dd34-33849505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc53ad0db9db6630a08652e7d5be5b9e41c2cd3c' => 
    array (
      0 => '/home/site/wwwroot/admin3945pw7m7/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl',
      1 => 1559582191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12234704565cf6c36649dd34-33849505',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf6c3664bfea3_97727755',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf6c3664bfea3_97727755')) {function content_5cf6c3664bfea3_97727755($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
