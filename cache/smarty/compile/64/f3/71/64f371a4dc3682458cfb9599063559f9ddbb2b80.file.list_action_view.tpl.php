<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:29:06
         compiled from "/home/site/wwwroot/admin/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16546842945cf558e20b0017-55473594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64f371a4dc3682458cfb9599063559f9ddbb2b80' => 
    array (
      0 => '/home/site/wwwroot/admin/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1559581736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16546842945cf558e20b0017-55473594',
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
  'unifunc' => 'content_5cf558e20c9d44_68180437',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558e20c9d44_68180437')) {function content_5cf558e20c9d44_68180437($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
