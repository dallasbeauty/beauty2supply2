<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-06-03 17:29:09
         compiled from "/home/site/wwwroot/themes/community-theme-default/store_infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2383663125cf558e50bb715-25752350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f29109a7c8ba70f9c01805c3f81ae452b1787b31' => 
    array (
      0 => '/home/site/wwwroot/themes/community-theme-default/store_infos.tpl',
      1 => 1559580417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2383663125cf558e50bb715-25752350',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'days_datas' => 0,
    'one_day' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5cf558e50ce022_75455800',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf558e50ce022_75455800')) {function content_5cf558e50ce022_75455800($_smarty_tpl) {?>

<?php  $_smarty_tpl->tpl_vars['one_day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['days_datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one_day']->key => $_smarty_tpl->tpl_vars['one_day']->value) {
$_smarty_tpl->tpl_vars['one_day']->_loop = true;
?>
  <p>
    <strong><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['one_day']->value['day']),$_smarty_tpl);?>
: </strong> &nbsp;<span><?php echo $_smarty_tpl->tpl_vars['one_day']->value['hours'];?>
</span>
  </p>
<?php } ?>

<?php }} ?>
