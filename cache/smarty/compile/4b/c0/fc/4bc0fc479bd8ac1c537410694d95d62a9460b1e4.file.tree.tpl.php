<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:29:07
         compiled from "/home/site/wwwroot/admin/themes/default/template/helpers/tree/tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13490891115cf558e36935f4-36465111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bc0fc479bd8ac1c537410694d95d62a9460b1e4' => 
    array (
      0 => '/home/site/wwwroot/admin/themes/default/template/helpers/tree/tree.tpl',
      1 => 1559581738,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13490891115cf558e36935f4-36465111',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'nodes' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf558e36aadc3_58953575',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558e36aadc3_58953575')) {function content_5cf558e36aadc3_58953575($_smarty_tpl) {?>
<div class="panel">
	<?php if (isset($_smarty_tpl->tpl_vars['header']->value)) {?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['nodes']->value)) {?>
	<ul id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="tree">
		<?php echo $_smarty_tpl->tpl_vars['nodes']->value;?>

	</ul>
	<?php }?>
</div><?php }} ?>
