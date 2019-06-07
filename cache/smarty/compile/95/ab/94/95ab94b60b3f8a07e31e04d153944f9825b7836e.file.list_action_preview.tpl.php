<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-04 15:15:50
         compiled from "/home/site/wwwroot/admin3945pw7m7/themes/default/template/helpers/list/list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13175265745cf6c366b6b123-99737555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95ab94b60b3f8a07e31e04d153944f9825b7836e' => 
    array (
      0 => '/home/site/wwwroot/admin3945pw7m7/themes/default/template/helpers/list/list_action_preview.tpl',
      1 => 1559581736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13175265745cf6c366b6b123-99737555',
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
  'unifunc' => 'content_5cf6c366b75997_68049770',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf6c366b75997_68049770')) {function content_5cf6c366b75997_68049770($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
