<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:29:07
         compiled from "/home/site/wwwroot/admin/themes/default/template/helpers/tree/tree_node_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2182802955cf558e3c2a183-00344499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f72af8fc58db89fccc8a95f42d0f6888c57d017' => 
    array (
      0 => '/home/site/wwwroot/admin/themes/default/template/helpers/tree/tree_node_item.tpl',
      1 => 1559581738,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2182802955cf558e3c2a183-00344499',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf558e3c33937_29776117',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558e3c33937_29776117')) {function content_5cf558e3c33937_29776117($_smarty_tpl) {?>

<li class="tree-item">
	<span class="tree-item-name">
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
