<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:29:07
         compiled from "/home/site/wwwroot/admin/themes/default/template/helpers/tree/tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6225769855cf558e38815d1-83730396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a50d6bb3c0e2a84e347c43300ab72c3d6c54fab' => 
    array (
      0 => '/home/site/wwwroot/admin/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1559581738,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6225769855cf558e38815d1-83730396',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf558e38cabf2_25928997',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558e38cabf2_25928997')) {function content_5cf558e38cabf2_25928997($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div><?php }} ?>
