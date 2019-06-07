<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:29:01
         compiled from "/home/site/wwwroot/admin/themes/default/template/controllers/request_sql/list_action_export.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7331960535cf558dd1710b8-73968824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d52f07ae134aaf16ecb9e55aa0accd1403c7d0b' => 
    array (
      0 => '/home/site/wwwroot/admin/themes/default/template/controllers/request_sql/list_action_export.tpl',
      1 => 1559581726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7331960535cf558dd1710b8-73968824',
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
  'unifunc' => 'content_5cf558dd184241_56882449',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558dd184241_56882449')) {function content_5cf558dd184241_56882449($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="btn btn-default">
	<i class="icon-cloud-upload"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
