<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:29:07
         compiled from "/home/site/wwwroot/admin/themes/default/template/helpers/tree/tree_node_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5320726805cf558e394d567-34639554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb3da7291d04bb1d095637908a33d342cb2028bb' => 
    array (
      0 => '/home/site/wwwroot/admin/themes/default/template/helpers/tree/tree_node_folder.tpl',
      1 => 1559581738,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5320726805cf558e394d567-34639554',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf558e3958a63_04497625',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558e3958a63_04497625')) {function content_5cf558e3958a63_04497625($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/site/wwwroot/vendor/smarty/smarty/libs/plugins/modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li><?php }} ?>
